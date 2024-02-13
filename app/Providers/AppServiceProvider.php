<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        app('hash')->extend('legacy-bcrypt', function () {
            return new BcryptHasher($this->app['config']['hashing.bcrypt'] ?? []);
        });
    }
}
