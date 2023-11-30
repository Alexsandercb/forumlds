<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider; // Importe a classe ServiceProvider corretamente

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
        // Definir o comprimento padrão das strings
        Schema::defaultStringLength(191);
    }
}
