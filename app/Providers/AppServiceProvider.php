<?php

namespace App\Providers;

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
        //
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        //        if ($this->app->environment() !== 'production') {
//            $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
//            $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
//        }
        $this->app->bind(
                'Illuminate\Contracts\Auth\Registrar', 'App\Services\Registrar'
        );
        require_once __DIR__.'/../Http/helpers.php';
    }
}
