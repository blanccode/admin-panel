<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

class PageCounterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle(Request $request, Closure $next)
    {
        // $routeCollection = collect(Route::getRoutes());

        // $uriArray = [];

        // foreach ($routeCollection as $route) {
        //     $uris = $route->uri();

        //     array_push($uriArray, $uris);
        // }
        // dd($uriArray);
        if (Cookie::get('view-session') == '') {
            Cookie::queue(Cookie::make('view-session', '1', 30));
            $view = new View;
            $view->incrementViewCount();
        }
        
        return $next($request);
    }
}
