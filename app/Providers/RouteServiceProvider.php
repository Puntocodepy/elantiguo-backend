<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // Route::prefix('api')
            //     ->middleware('api')
            //     ->group(base_path('routes/api.php'));

            Route::prefix('v1')
                ->middleware('auth:api')
                ->namespace($this->namespace)
                ->group(function ($router) {
                    $this->getRoutes(base_path('routes/api-privates/'));
                });

            Route::prefix('v1')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(function ($router) {
                    $this->getRoutes(base_path('routes/api-public/'));
                });
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }


    /**
     * @param $dir
     * @return RouteCollection|void
     */
    public function getRoutes($directory)
    {
        # Abre el directorio
        if ($handle = opendir($directory)) {
            #Recorre todos los elementos del directorio
            while (($file = readdir($handle)) !== false) {
                
               #Ignora los directorios '.' y '..'
                if ($file == '.' || $file == '..') continue;
    
                #Construye la ruta completa al archivo o directorio
                $path = $directory . $file;
    
                #Si es un archivo, requiérelo
                if (is_file($path)) {
                    require $path;
                }
                #Si es un directorio, llama a la función de manera recursiva
                elseif (is_dir($path)) {
                    $this->getRoutes($path . '/');
                }
            }
    
            #Cierra el directorio
            closedir($handle);
        }
    }
}
