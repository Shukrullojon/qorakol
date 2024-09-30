<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->paginate(20);
        return view('review.index',[
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'status' => 'required|integer|in:1,0',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("video")){
            $video = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('files'), $video);
        }
        Review::create([
            'video' => $video ?? "",
            'name' => $request->name,
            'status' => $request->status,
            'video_alt_uz' => $request->video_alt_uz,
            'video_alt_ru' => $request->video_alt_ru
        ]);
        return redirect()->route('review.index')->with('success','Review create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return view('review.show',[
            'review' => $review,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('review.edit',[
            'review' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'status' => 'required|integer|in:1,0',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("video")){
            $filePathVideo = public_path('files/' . $review->video);
            if (File::exists($filePathVideo)) {
                File::delete($filePathVideo);
            }
            $video = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('files'), $video);
        }
        $review->update([
            'video' => $video ?? $review->video,
            'name' => $request->name,
            'status' => $request->status,
        ]);
        return redirect()->route('review.index')->with('success','Review update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $filePathVideo = public_path('files/' . $review->video);
        if (File::exists($filePathVideo)) {
            File::delete($filePathVideo);
        }
        $review->delete();
        return redirect()->route('review.index')->with('success','Review delete successfuly');
    }
}
