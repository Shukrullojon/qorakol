<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'profile'])->name("profile");
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
        Route::resource('school', \App\Http\Controllers\SchoolController::class);
        Route::resource('center', \App\Http\Controllers\CenterController::class);
        Route::resource('advantage', \App\Http\Controllers\AdvantageController::class);
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
