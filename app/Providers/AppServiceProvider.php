<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//llamar a Schema
use Illuminate\Support\Facades\Schema;

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
        //configurar esta linea si no en varios archivos , se va a quejar
        Schema::defaultStringLength(191);
    }
}
