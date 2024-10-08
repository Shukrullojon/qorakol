<?php

namespace App\Http\Controllers;

use App\Models\Filial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FilialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filials = Filial::latest()->paginate(20);
        return view('filial.index',[
            'filials' => $filials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'info' => 'required|string|max:200',
            'google' => 'required|string|max:200',
            'yandex' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        Filial::create([
            'name' => $request->name,
            'info' => $request->info,
            'google' => $request->google,
            'yandex' => $request->yandex,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('filial.index')->with('success','Filial info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filial $filial)
    {
        return view('filial.show',[
            'filial' => $filial,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filial $filial)
    {
        return view('filial.edit',[
            'filial' => $filial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filial $filial)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'info' => 'required|string|max:200',
            'google' => 'required|string|max:200',
            'yandex' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $filial->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $filial->update([
            'name' => $request->name,
            'info' => $request->info,
            'google' => $request->google,
            'yandex' => $request->yandex,
            'image' => $image ?? "",
            'status' => $request->status,
        ]);
        return redirect()->route('filial.index')->with('success','Filial update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filial $filial)
    {
        $filePath = public_path('files/'.$filial->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $filial->delete();
        return redirect()->route('filial.index')->with('success','Filial delete successfuly');
    }
}
