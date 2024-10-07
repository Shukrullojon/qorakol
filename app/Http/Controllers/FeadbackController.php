<?php

namespace App\Http\Controllers;

use App\Models\Feadback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FeadbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feadbacks = Feadback::latest()->paginate(20);
        return view('feadback.index',[
            'feadbacks' => $feadbacks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feadback.create');
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
        Feadback::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image ?? "",
            'link' => $request->link,
            'status' => $request->status,
        ]);
        return redirect()->route('feadback.index')->with('success','Feadback info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feadback $feadback)
    {
        return view('feadback.show',[
            'feadback' => $feadback,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feadback $feadback)
    {
        return view('feadback.edit',[
            'feadback' => $feadback,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feadback $feadback)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $feadback->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $feadback->update([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'status' => $request->status,
            'image' => $image ?? $feadback->image,
        ]);
        return redirect()->route('feadback.index')->with('success','Feadback update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feadback $feadback)
    {
        $filePath = public_path('files/'.$feadback->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $feadback->delete();
        return redirect()->route('feadback.index')->with('success','Feadback delete successfuly');
    }
}
