<?php

namespace App\Providers;

use App\Blog;
use App\Cart\Cart;
use App\Cart\wishlist;
use App\Category;
use App\Order;
use App\Product;
use App\OrderDetail;
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
        view()->composer('*', function($view){
            $view->with([
                'cart' => new Cart()
            ]);

        });

        view()->composer('*', function($view){
            $view->with([
                'order' => new Order()
            ]);

        });
        view()->composer('*', function($view){
            $view->with([
                'orderDetail' => new OrderDetail()
            ]);

        });
        view()->composer('*', function($view){
            $view->with([
                'wishlist' => new wishlist()
            ]);

        });
        view()->composer('*', function($view){
            $view->with([
                'product' => Product::limit(8)->get(),

            ]);

        });
        view()->composer('*', function($view){
            $view->with([
                'categories' =>  Category::all(),
            ]);

        });
    }
}
