<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(20);
        return view('partner.index',[
            'partners' => $partners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'link' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Partner::create($request->all());
        return redirect()->route('partner.index')->with('success','Partner create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return view('partner.show',[
            'partner' => $partner,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('partner.edit',[
            'partner' => $partner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
            'link' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        $partner->update([
            'name' => $request->name,
            'link' => $request->link,
            'status' => $request->status,
        ]);
        return redirect()->route('partner.index')->with('success','Partner update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partner.index')->with('success','Partner delete successfuly');
    }
}
