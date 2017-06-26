<?php

namespace App\Providers;

use App\Brand;
use Illuminate\Support\ServiceProvider;

class BrandServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('brand.latest', function($view){
            $view->with('latest_brands', Brand::inRandomOrder()->limit(21)->get());
        });

        view()->composer('brand.random', function($view){
            $view->with('random_brands', Brand::inRandomOrder()->limit(28)->get());
        });

        view()->composer('brand.show.big', function($view){
            $view->with('big_brand', Brand::inRandomOrder()->limit(1)->get()->first());
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
