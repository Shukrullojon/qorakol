<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->paginate(20);
        return view('new.index',[
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('new.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'title_uz' => 'required|string|max:200',
            'title_ru' => 'required|string|max:200',
            'description_uz' => 'required|string|max:1200',
            'description_ru' => 'required|string|max:1200',
            'status' => 'required|integer|in:1,0',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }

        $new = News::create([
            'image' => $image ?? "",
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
            'img_alt_uz' => $request->img_alt_uz,
            'img_alt_ru' => $request->img_alt_ru,
        ]);
        if ($request->hasFile('file')) {
            foreach ($request->file as $f){
                $file_name = date('Y_m_d_H_i_s').rand(10000, 99999).'.'.$f->getClientOriginalExtension();
                $f->move(public_path('files'), $file_name);
                \App\Models\File::create([
                    'model' => News::class,
                    'model_id' => $new->id,
                    'file' => $file_name,
                ]);
            }
        }
        return redirect()->route('news.index')->with('success','News create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('new.show',[
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('new.edit',[
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = Validator::make($request->all(),[
            'title_uz' => 'required|string|max:200',
            'title_ru' => 'required|string|max:200',
            'description_uz' => 'required|string|max:1200',
            'description_ru' => 'required|string|max:1200',
            'status' => 'required|integer|in:1,0',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $news->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }

        if ($request->hasFile('file')) {
            $file_db = \App\Models\File::where('model',News::class)->where('model_id',$news->id)->get();
            foreach ($file_db as $f_d){
                $filePath = public_path('files/' . $f_d->file);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $f_d->delete();
            }
            foreach ($request->file as $f){
                $file_name = date('Y_m_d_H_i_s').rand(10000, 99999).'.'.$f->getClientOriginalExtension();
                $f->move(public_path('files'), $file_name);
                \App\Models\File::create([
                    'model' => News::class,
                    'model_id' => $news->id,
                    'file' => $file_name,
                ]);
            }
        }

        $news->update([
            'image' => $image ?? $news->image,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
        ]);
        return redirect()->route('news.index')->with('success','News update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $filePath = public_path('files/' . $news->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        foreach ($news->files as $f){
            $ff = public_path('files/' . $f->file);
            if (File::exists($ff)) {
                File::delete($ff);
            }
        }
        $news->delete();
        return redirect()->route('news.index')->with('success','News delete successfuly');
    }
}
