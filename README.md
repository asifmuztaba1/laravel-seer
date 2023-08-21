# Laravel Seer

Laravel Seer is a package that allows you to automatically log third-party API calls made from your Laravel application.

## Installation

You can install this package via Composer by running the following command:

```bash
composer require asifmuztaba1/laravel-seer
```

## Usage

##### Register the Service Provider:

In your Laravel application, open the config/app.php configuration file and add the ApiLoggerServiceProvider to the
providers array:

```php
'providers' => [
Asifmuztaba1\LaravelSeer\ApiLoggerServiceProvider::class,
],
```

##### Define Routes to Use the Middleware:

Open the routes/api.php file in the root directory of your Laravel application and apply the middleware to the specific
routes or route groups where you want to monitor third-party API calls:

``` php
<?php

use Illuminate\Support\Facades\Route;
use Asifmuztaba1\LaravelSeer\Middleware\ApiLoggerMiddleware;

Route::middleware(ApiLoggerMiddleware::class)->group(function () {
    // Define routes here that you want to be monitored
});
```

##### Configuration (Optional)

You can publish the configuration file to customize the behavior of the package:

```bash
php artisan vendor:publish --tag=laravelseer-config
```

##### License

Laravel Seer is open-sourced software licensed under the MIT license.
