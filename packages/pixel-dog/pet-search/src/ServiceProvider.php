<?php

namespace PixelDog\PetSearch;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/pet-search.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('pet-search.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'pet-search'
        );

        $this->app->bind('pet-search', function () {
            return new PetSearch();
        });
    }
}
