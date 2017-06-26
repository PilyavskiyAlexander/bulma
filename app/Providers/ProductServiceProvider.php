<?php

namespace App\Providers;

use App\Product;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('product.random', function($view){
            $view->with('random_products', Product::inRandomOrder()->limit(21)->get());
        });

        view()->composer('product.latest', function($view){
            $view->with('latest_products', Product::inRandomOrder()->limit(15)->get());
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
