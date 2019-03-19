<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CatNews;
use App\User;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['client.layout.blog','client.layout.blog_readmore'],function($view){
            $loai_news = CatNews::all();
            $view->with('loai_news',$loai_news);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }
}
