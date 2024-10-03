<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::latest()->paginate(20);
        return view('school.index',[
            'schools' => $schools,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        School::create([
            'name' => $request->name,
            'image' => $image ?? "",
        ]);
        return redirect()->route('school.index')->with('success','School info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return view('school.show',[
            'school' => $school,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('school.edit',[
            'school' => $school
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $school->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $school->update([
            'name' => $school->name,
            'image' => $image ?? $school->image,
        ]);
        return redirect()->route('school.index')->with('success','School update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $filePath = public_path('files/' . $school->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $school->delete();
        return redirect()->route('school.index')->with('success','School delete successfuly');
    }
}
