<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CatNews;
use App\User;
use App\Settings;
use App\Collection;
use App\News;
use Cart;

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

        view()->composer('*', function($view){
            $set = Settings::first();
            $view->with('set',$set);
        });

        view()->composer(['client.layout.nav', 'client.layout.nav_mobile','client.page.blog_cat'],function($view){
            $col = Collection::where('parent', 0)->orderBy('position', 'ASC')->get();
            $cat_news = CatNews::all();
            $view->with('col', $col);
            $view->with('cat_news', $cat_news);
        });
        view()->composer('client.page.blog_news_post', function($view){
            $news = News::orderBy('id', 'DECS')->take(12)->get();
            $view->with('news', $news);
        });
        view()->composer(['client.page.cart', 'client.checkout.*', 'client.layout.nav'], function($view){
            $cart = Cart::content();
            $totalPrice = Cart::subtotal(0);
            $totalItem = Cart::count();
            $view->with([   'cart' => $cart, 
                            'totalPrice' => $totalPrice, 
                            'totalItem' => $totalItem
                        ]);
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
