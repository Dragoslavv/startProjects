<?php
namespace App\Providers;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Controller';

    public function boot(Router $router)
    {
        //
        parent::boot($router);
    }

    public function map(Router $router)
    {
        $this->mapWebRoutes($router);
        //
    }

    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require ('../Routes/routes.php');
        });
    }
}