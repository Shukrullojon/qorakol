<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::latest()->paginate(20);
        return view('comment.index',[
            'comments' => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'comment_uz' => 'required|string|max:200',
            'comment_ru' => 'required|string|max:200',
            'fio' => 'required|string|max:200',
            'company' => 'required|string|max:200',
            'status' => 'required|integer|in:1,0',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Comment::create($request->all());
        return redirect()->route('comment.index')->with('success','Comment create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('comment.show',[
            'comment' => $comment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit',[
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $validated = Validator::make($request->all(),[
            'comment_uz' => 'required|string|max:200',
            'comment_ru' => 'required|string|max:200',
            'fio' => 'required|string|max:200',
            'company' => 'required|string|max:200',
            'status' => 'required|integer|in:1,0',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        $comment->update([
            'comment_uz' => $request->comment_uz,
            'comment_ru' => $request->comment_ru,
            'fio' => $request->fio,
            'company' => $request->company,
            'status' => $request->status,
        ]);
        return redirect()->route('comment.index')->with('success','Comment update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comment.index')->with('success','Comment delete successfuly');
    }
}
