<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = Advantage::latest()->paginate(20);
        return view('advantage.index',[
            'advantages' => $advantages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('advantage.create');
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
        Advantage::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('advantage.index')->with('success','Advantage info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advantage $advantage)
    {
        return view('advantage.show',[
            'advantage' => $advantage,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advantage $advantage)
    {
        return view('advantage.edit',[
            'advantage' => $advantage
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advantage $advantage)
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
            $filePath = public_path('files/' . $advantage->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $advantage->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('advantage.index')->with('success','Advantage update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advantage $advantage)
    {
        $filePath = public_path('files/' . $advantage->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $advantage->delete();
        return redirect()->route('advantage.index')->with('success','Advantage delete successfuly');
    }
}
