<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::latest()->paginate(20);
        return view('teacher.index',[
            'teachers' => $teachers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'info' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        Teacher::create([
            'name' => $request->name,
            'info' => $request->info,
            'image' => $image ?? "",
            'status' => $request->status,
            'experence' => $request->experence,
        ]);
        return redirect()->route('teacher.index')->with('success','Teacher info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teacher.show',[
            'teacher' => $teacher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit',[
            'teacher' => $teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'info' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $teacher->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $teacher->update([
            'name' => $request->name,
            'info' => $request->info,
            'image' => $image ?? "",
            'status' => $request->status,
            'experence' => $request->experence,
        ]);
        return redirect()->route('teacher.index')->with('success','Teacher update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $filePath = public_path('files/'.$teacher->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $teacher->delete();
        return redirect()->route('teacher.index')->with('success','Teacher delete successfuly');
    }
}
