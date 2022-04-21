<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        PaginationPaginator::useBootstrap();
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $username = Auth::user()->username;
                $view->with('username', $username);
            } else {
                $view->with('username', null);
            }
        });
    }
}
