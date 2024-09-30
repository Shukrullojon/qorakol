<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->paginate(20);
        return view('about.index',[
            'abouts' => $abouts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
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
        if ($request->hasFile("video")){
            $video = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('files'), $video);
        }
        About::create([
            'video' => $video ?? "",
            'image' => $image ?? "",
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
            'video_alt_uz' => $request->video_alt_uz,
            'video_alt_ru' => $request->video_alt_ru,
            'img_alt_uz' => $request->img_alt_uz,
            'img_alt_ru' => $request->img_alt_ru,
        ]);
        return redirect()->route('about.index')->with('success','About create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('about.show',[
            'about' => $about,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('about.edit',[
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
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
            $filePath = public_path('files/' . $about->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        if ($request->hasFile("video")){
            $filePathVideo = public_path('files/' . $about->video);
            if (File::exists($filePathVideo)) {
                File::delete($filePathVideo);
            }
            $video = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('files'), $video);
        }
        $about->update([
            'video' => $video ?? $about->video,
            'image' => $image ?? $about->image,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
            'video_alt_uz' => $request->video_alt_uz,
            'video_alt_ru' => $request->video_alt_ru,
            'img_alt_uz' => $request->img_alt_uz,
            'img_alt_ru' => $request->img_alt_ru,

        ]);
        return redirect()->route('about.index')->with('success','About update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $filePath = public_path('files/' . $about->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $filePathVideo = public_path('files/' . $about->video);
        if (File::exists($filePathVideo)) {
            File::delete($filePathVideo);
        }
        $about->delete();
        return redirect()->route('about.index')->with('success','About delete successfuly');
    }
}
