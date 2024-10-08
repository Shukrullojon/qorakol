<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewController extends Controller
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
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:200',
            'status' => 'required|integer',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('new.index')->with('success','News info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $new)
    {
        return view('new.show',[
            'new' => $new,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $new)
    {
        return view('new.edit',[
            'new' => $new
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $new)
    {
        $validated = Validator::make($request->all(),[
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:200',
            'status' => 'required|integer',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $new->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $new->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('new.index')->with('success','New update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $new)
    {
        $filePath = public_path('files/' . $new->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $new->delete();
        return redirect()->route('advantage.index')->with('success','Advantage delete successfuly');
    }
}
