<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Center::latest()->paginate(20);
        return view('center.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('center.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required|string',
            'link' => 'nullable|string|max:255',
            'student_count' => 'nullable|integer',
        ]);

        Center::create($validated);

        return redirect()->route('center.index')->with('success', 'Center created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Center $center)
    {
        return view('center.show', compact('center'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Center $center)
    {
        return view('center.edit', compact('center'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {
        $validated = $request->validate([
            'text' => 'required|string',
            'link' => 'nullable|string|max:255',
            'student_count' => 'nullable|integer',
        ]);

        $center->update($validated);

        return redirect()->route('center.index')->with('success', 'Center updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Center $center)
    {
        $center->delete();
        return redirect()->route('center.index')->with('success', 'Center deleted successfully.');
    }
}
