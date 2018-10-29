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

        $this->mapWebFrontRoutes();

        //
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
        $namesapce = $this->namespace.'\Front';

        Route::middleware('web')
            ->namespace($namesapce)
            ->group(function () {
                try {
                    require base_path('routes/web-front.php');
                } catch  (Exception $exception) {
                    logger()->warning("Front routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback('NotFoundController');
            });
    }

    /**
     * Define the "my" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebMyRoutes()
    {
        $namesapce = $this->namespace.'\Portal';

        Route::middleware('web')
            ->namespace($namesapce)
            ->group(function () {
                try {
                    require base_path('routes/web-portal.php');
                } catch  (Exception $exception) {
                    logger()->warning("Portal routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback('NotFoundController');
            });
    }

    /**
     * Define the "manage" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebManageRoutes()
    {
        $namesapce = $this->namespace.'\Management';

        Route::middleware('web')
            ->namespace($namesapce)
            ->group(function () {
                try {
                    require base_path('routes/web-management.php');
                } catch  (Exception $exception) {
                    logger()->warning("Management routes weren't included because {$exception->getMessage()}.");
                }

                Route::fallback('NotFoundController');
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
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
