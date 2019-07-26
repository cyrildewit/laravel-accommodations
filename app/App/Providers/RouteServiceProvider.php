<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
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

        $this->mapWebSecureRoutes();

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
        Route::domain('laravel-accommodations.test')
            ->name('front.')
            ->middleware('web')
            ->group(function () {
                try {
                    require base_path('routes/web-front.php');
                } catch (Exception $exception) {
                    logger()->warning("Front routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback(\App\Http\Controllers\Front\NotFoundController::class)->name('errors.404');
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
        Route::domain('my.laravel-accommodations.test')
            ->name('portal.')
            ->middleware('web')
            ->group(function () {
                try {
                    require base_path('routes/web-portal.php');
                } catch (Exception $exception) {
                    logger()->warning("Portal routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback(\App\Http\Controllers\Portal\NotFoundController::class)->name('errors.404');
            });
    }

    /**
     * Define the "secure" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebSecureRoutes()
    {
        Route::domain('secure.laravel-accommodations.test')
            ->name('secure.')
            ->middleware('web')
            ->group(function () {
                try {
                    require base_path('routes/web-secure.php');
                } catch (Exception $exception) {
                    logger()->warning("Secure routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback(\App\Http\Controllers\Secure\NotFoundController::class)->name('errors.404');
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
        Route::domain('manage.laravel-accommodations.test')
            ->name('management.')
            ->middleware('web')
            ->group(function () {
                try {
                    require base_path('routes/web-management.php');
                } catch (Exception $exception) {
                    logger()->warning("Management routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback(\App\Http\Controllers\Management\NotFoundController::class)->name('errors.404');
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
            ->group(function () {
                try {
                    require base_path('routes/api.php');
                } catch (Exception $exception) {
                    logger()->warning("API routes weren't included because {$exception->getMessage()}.");
                }
            });
    }
}
