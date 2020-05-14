<?php

namespace App\Http\Middleware;

use Closure;

class usuario
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
      if(auth()->user()-> == 1){
      return $next($request);
    }
      return redirect('/home')->with('error','You have not admin access');
    }
}
