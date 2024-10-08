<?php

namespace App\Http\Controllers;

use App\Models\Ask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asks = Ask::latest()->paginate(20);
        return view('ask.index',[
            'asks' => $asks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ask.create');
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
        Ask::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('ask.index')->with('success','Ask info create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ask $ask)
    {
        return view('ask.show',[
            'ask' => $ask,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ask $ask)
    {
        return view('ask.edit',[
            'ask' => $ask
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ask $ask)
    {
        $validated = Validator::make($request->all(),[
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:200',
            'status' => 'required|integer',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        $ask->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('ask.index')->with('success','Ask update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ask $ask)
    {
        $ask->delete();
        return redirect()->route('ask.index')->with('success','Ask delete successfuly');
    }
}
