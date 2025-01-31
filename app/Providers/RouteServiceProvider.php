<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for your application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();  // This ensures the api.php routes are loaded
    }

    /**
     * Define the "api" routes for the application.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')      // Ensures all routes in api.php have /api prefix
            ->middleware('api')   // Ensures the 'api' middleware is applied
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));  // Loads api.php routes
    }
}
