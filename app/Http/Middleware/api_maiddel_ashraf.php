<?php

namespace App\Http\Middleware;

use Closure;

class api_maiddel_ashraf
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


       // if (!Auth()->check()) {
           // return dd ('not ');
      //  }




        return $next($request);
    }
}
