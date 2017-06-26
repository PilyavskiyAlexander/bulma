<?php

namespace App\Providers;

use App\UnitType;
use Illuminate\Support\ServiceProvider;

class UnitTypeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('contacts.form', function($view){
            $view->with('unit_types', UnitType::all());
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
