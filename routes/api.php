<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/comments',function ($lang){
    $comments = [
        [
            'id' => 1,
            'text' => "This is first comment",
        ],

    ];
    return response()->json($comments);
});
