<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
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
            'question' => 'required|string|max:200',
            'answer_1' => 'required|string|max:200',
            'answer_2' => 'required|string|max:200',
            'answer_3' => 'required|string|max:200',
            'answer_4' => 'required|string|max:200',
            'correct_answer' => 'required|integer|max:200',
            'status' => 'required|integer|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Question::create([
            'question' => $request->question,
            'answer_1' => $request->answer_1,
            'answer_2' => $request->answer_2,
            'answer_3' => $request->answer_3,
            'answer_4' => $request->answer_4,
            'correct_answer' => $request->correct_answer,
            'status' => $request->status,
        ]);
        return redirect()->route('question.index')->with('success','Question info create successfuly');
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
            'question' => $question,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $validated = Validator::make($request->all(),[
            'question' => 'required|string|max:200',
            'answer_1' => 'required|string|max:200',
            'answer_2' => 'required|string|max:200',
            'answer_3' => 'required|string|max:200',
            'answer_4' => 'required|string|max:200',
            'correct_answer' => 'required|integer|max:200',
            'status' => 'required|integer|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        $question->update([
            'question' => $request->question,
            'answer_1' => $request->answer_1,
            'answer_2' => $request->answer_2,
            'answer_3' => $request->answer_3,
            'answer_4' => $request->answer_4,
            'correct_answer' => $request->correct_answer,
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
