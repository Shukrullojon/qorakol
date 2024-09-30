<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::latest()->paginate(20);
        return view('work.index',[
            'works' => $works,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('work.create');
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
        Work::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
        ]);
        return redirect()->route('work.index')->with('success','Work create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        return view('work.show',[
            'work' => $work,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        return view('work.edit',[
            'work' => $work
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
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
        $work->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
        ]);
        return redirect()->route('work.index')->with('success','Work update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index')->with('success','Work delete successfuly');
    }
}
