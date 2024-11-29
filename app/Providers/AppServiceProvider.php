<?php

namespace App\Providers;

use App\Models\Filial;
use App\Models\Question;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        View::composer('layouts.app', function ($view) {
            $filials = Filial::where('status', 1)->get();
            $questions = Question::where('status', 1)->take(10)->get()->map(function ($question) {
                return [
                    'question' => $question->question,
                    'options' => [
                        $question->answer_1,
                        $question->answer_2,
                        $question->answer_3,
                        $question->answer_4,
                    ],
                ];
            });
            $view->with(compact('filials', 'questions'));

        });
    }
}
