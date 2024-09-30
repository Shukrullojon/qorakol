<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = Consultation::latest()->paginate(20);
        return view('consultation.index',[
            'consultations' => $consultations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultation.create');
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
        Consultation::create($request->all());
        return redirect()->route('consultation.index')->with('success','Consultation create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        return view('consultation.show',[
            'consultation' => $consultation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        return view('consultation.edit',[
            'consultation' => $consultation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
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

        $consultation->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
        ]);
        return redirect()->route('consultation.index')->with('success','Consultation update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();
        return redirect()->route('consultation.index')->with('success','Consultation delete successfuly');
    }
}
