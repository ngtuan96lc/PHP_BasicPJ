<?php

namespace App\Providers;
use App\category;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view() -> composer('header',function($view){
            $type_category = category::all();
            $view -> with ('type_category', $type_category );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
