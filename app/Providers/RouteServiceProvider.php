<?php

namespace App\Providers;

use App\Category;
use App\Deal;
use App\Package;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->bind('package', function($slug)
        {
            return Package::with('information', 'tickets.information', 'photos')
                ->whereSlug($slug)->firstOrFail();
        });

        $this->bind('category', function($slug)
        {
            return Category::whereSlug($slug)->firstOrFail();
        });        

        $this->bind('packages', function($id)
        {
            return Package::with('information', 'tickets.information', 'photos')->findOrFail($id);
        });

        $this->bind('categories', function($id)
        {
            return Category::findOrFail($id);
        });   

        $this->bind('deal', function($slug)
        {
            return Deal::with('photos')
                ->whereSlug($slug)->first();
        });   

        $this->bind('deals', function($id)
        {
            return Deal::findOrFail($id);
        });   

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
