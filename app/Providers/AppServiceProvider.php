<?php

namespace App\Providers;

use App\Models\Filial;
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
                $filials = Filial::where('status',1)->get();
                $view->with('filials', $filials);
        });
    }
}
