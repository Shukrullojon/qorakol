<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Job;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(20);
        return view('job.index',[
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'title_uz' => 'required|string|max:200',
            'title_ru' => 'required|string|max:200',
            'address_uz' => 'required|string|max:200',
            'address_uz' => 'required|string|max:200',
            'width' => 'required|string|max:200',
            'height' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        if ($request->hasFile("image_logo")){
            $image_logo = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image_logo->getClientOriginalExtension();
            $request->image_logo->move(public_path('files'), $image_logo);
        }
        $job = Job::create([
            'image' => $image ?? "",
            'image_logo' => $image_logo ?? "",
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'address_uz' => $request->address_uz,
            'address_ru' => $request->address_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'width' => $request->width,
            'height' => $request->height,
            'status' => $request->status,
            'img_alt_uz' => $request->img_alt_uz,
            'img_alt_ru' => $request->img_alt_ru,
        ]);
        if ($request->hasFile('file')) {
            foreach ($request->file as $f){
                $file_name = date('Y_m_d_H_i_s').rand(10000, 99999).'.'.$f->getClientOriginalExtension();
                $f->move(public_path('files'), $file_name);
                \App\Models\File::create([
                    'model' => Job::class,
                    'model_id' => $job->id,
                    'file' => $file_name,
                ]);
            }
        }
        return redirect()->route('job.index')->with('success','Job create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {

        return view('job.show',[
            'job' => $job,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('job.edit',[
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $validated = Validator::make($request->all(),[
            'title_uz' => 'required|string|max:200',
            'title_ru' => 'required|string|max:200',
            'address_uz' => 'required|string|max:200',
            'address_uz' => 'required|string|max:200',
            'width' => 'required|string|max:200',
            'height' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $job->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }

        if ($request->hasFile("image_logo")){
            $filePath = public_path('files/' . $job->image_logo);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image_logo = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image_logo->getClientOriginalExtension();
            $request->image_logo->move(public_path('files'), $image_logo);
        }

        if ($request->hasFile('file')) {
            $file_db = \App\Models\File::where('model',Job::class)->where('model_id',$job->id)->get();
            foreach ($file_db as $f_d){
                $filePath = public_path('files/' . $f_d->file);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $f_d->delete();
            }
            foreach ($request->file as $f){
                $file_name = date('Y_m_d_H_i_s').rand(10000, 99999).'.'.$f->getClientOriginalExtension();
                $f->move(public_path('files'), $file_name);
                \App\Models\File::create([
                    'model' => Job::class,
                    'model_id' => $job->id,
                    'file' => $file_name,
                ]);
            }
        }

        $job->update([
            'image' => $image ?? $job->image,
            'image_logo' => $image_logo ?? $job->image_logo,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'address_uz' => $request->address_uz,
            'address_ru' => $request->address_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'width' => $request->width,
            'height' => $request->height,
            'status' => $request->status,
        ]);
        return redirect()->route('job.index')->with('success','Job update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $filePath = public_path('files/' . $job->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        foreach ($job->files as $f){
            $ff = public_path('files/' . $f->file);
            if (File::exists($ff)) {
                File::delete($ff);
            }
        }
        $job->delete();
        return redirect()->route('job.index')->with('success','job delete successfuly');
    }
}
