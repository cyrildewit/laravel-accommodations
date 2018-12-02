<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebManagementRoutes();

        $this->mapWebPortalRoutes();

        $this->mapWebFrontRoutes();
    }

    /**
     * Define the "front" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebFrontRoutes()
    {
        $namespace = $this->namespace.'\Front';

        Route::domain('laravel-accommodations.test')
            ->name('front.')
            ->middleware('web')
            ->namespace($namespace)
            ->group(function () {
                try {
                    require base_path('routes/web-front.php');
                } catch  (Exception $exception) {
                    logger()->warning("Front routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback('NotFoundController')->name('errors.404');
            });
    }

    /**
     * Define the "portal" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebPortalRoutes()
    {
        $namespace = $this->namespace.'\Portal';

        Route::domain('my.laravel-accommodations.test')
            ->name('portal.')
            ->middleware('web')
            ->namespace($namespace)
            ->group(function () {
                try {
                    require base_path('routes/web-portal.php');
                } catch  (Exception $exception) {
                    logger()->warning("Portal routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback('NotFoundController')->name('errors.404');
            });
    }

    /**
     * Define the "management" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebManagementRoutes()
    {
        $namespace = $this->namespace.'\Management';

        Route::domain('manage.laravel-accommodations.test')
            ->name('management.')
            ->middleware('web')
            ->namespace($namespace)
            ->group(function () {
                try {
                    require base_path('routes/web-management.php');
                } catch  (Exception $exception) {
                    logger()->warning("Management routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback('NotFoundController')->name('errors.404');
            });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::domain('api.laravel-accommodations.test')
            ->name('api.')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(function () {
                try {
                    require base_path('routes/api.php');
                } catch  (Exception $exception) {
                    logger()->warning("API routes weren't included because {$exception->getMessage()}.");
                }
            });
    }
}
