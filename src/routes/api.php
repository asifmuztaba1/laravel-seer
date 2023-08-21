<?php


use Asifmuztaba1\LaravelSeer\App\Http\Middleware\ApiLogger\ApiLoggerMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(ApiLoggerMiddleware::class)->group(function () {
    // Define routes here if needed
});
