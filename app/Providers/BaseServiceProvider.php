<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(

            'App\Interface\LivroInterface',
            'App\Service\LivroService'
        );

        $this->app->bind(

            'App\Interface\AutorInterface',
            'App\Service\AutorService'
        );
        $this->app->bind(

            'App\Interface\AssuntoInterface',
            'App\Service\AssuntoService'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
