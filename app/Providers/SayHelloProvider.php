<?php

namespace App\Providers;

use App\Services\SayHello;
use Illuminate\Support\ServiceProvider;

class SayHelloProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SayHello::class, function () {
            return new SayHello();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
