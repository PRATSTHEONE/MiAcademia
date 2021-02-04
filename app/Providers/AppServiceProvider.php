<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator; //para que funcionen los links de la pagimacion con bootstrap
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //para que funcionen los links de la pagimacion con bootstrap
        Paginator::useBootstrap();
    }
}
