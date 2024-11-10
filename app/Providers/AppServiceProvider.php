<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Admin;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('admin', function ($app) {
            return new Admin;
        });
    }
    public function boot(): void
    {
        //
    }
}
