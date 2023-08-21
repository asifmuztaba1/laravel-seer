<?php

namespace Asifmuztaba1\LaravelSeer\App\Providers\ApiLogger;

use Illuminate\Support\ServiceProvider;

class ApiLoggerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'../../../../routes/api.php');
    }
}
