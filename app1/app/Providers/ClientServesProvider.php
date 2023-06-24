<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ClientServesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            'App\Http\Interfaces\ClientsInterFace',
            'App\Http\Reprositry\ClientsRepositry');

    }
}
