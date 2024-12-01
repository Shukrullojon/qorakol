<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/notification', [App\Http\Controllers\HomeController::class, 'notification'])->name("notification");
Route::post('/sendTestResult', [App\Http\Controllers\HomeController::class, 'sendTestResult'])->name("sendTestResult");

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'profile'])->name("profile");
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
        Route::resource('school', \App\Http\Controllers\SchoolController::class);
        Route::resource('center', \App\Http\Controllers\CenterController::class);
        Route::resource('advantage', \App\Http\Controllers\AdvantageController::class);
        Route::resource('partner', \App\Http\Controllers\PartnerController::class);
        Route::resource('feadback', \App\Http\Controllers\FeadbackController::class);
        Route::resource('cource', \App\Http\Controllers\CourceController::class);
        Route::resource('question', \App\Http\Controllers\QuestionController::class);
        Route::resource('filial', \App\Http\Controllers\FilialController::class);
        Route::resource('teacher', \App\Http\Controllers\TeacherController::class);
        Route::resource('ask', \App\Http\Controllers\AskController::class);
        Route::resource('new', \App\Http\Controllers\NewController::class);
    });
});

Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
})->name("language");
