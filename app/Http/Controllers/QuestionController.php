<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::latest()->paginate(20);
        return view('question.index',[
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create');
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
        Question::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
        ]);
        return redirect()->route('question.index')->with('success','Question create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view('question.show',[
            'question' => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        return view('question.edit',[
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
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
        $question->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'status' => $request->status,
        ]);
        return redirect()->route('question.index')->with('success','Question update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('question.index')->with('success','Question delete successfuly');
    }
}
