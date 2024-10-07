<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cources = Cource::latest()->paginate(20);
        return view('cource.index',[
            'cources' => $cources,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'description' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        Cource::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('cource.index')->with('success','Cource info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cource $cource)
    {
        return view('cource.show',[
            'cource' => $cource,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cource $cource)
    {
        return view('cource.edit',[
            'cource' => $cource,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cource $cource)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'description' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $cource->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $cource->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image ?? $cource->image,
        ]);
        return redirect()->route('cource.index')->with('success','Cource update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cource $cource)
    {
        $filePath = public_path('files/'.$cource->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $cource->delete();
        return redirect()->route('cource.index')->with('success','Cource delete successfuly');
    }
}
