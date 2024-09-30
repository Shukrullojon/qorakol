<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('webhook', [\App\Http\Controllers\WebhookController::class,'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', [\App\Http\Controllers\ApiController::class, 'getData']);
Route::post('/message', [\App\Http\Controllers\ApiController::class, 'sendMessage']);
