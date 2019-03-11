<?php

namespace Parking\Http\Middleware;

use Closure;

class isAdmin
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
      if (auth()->guest())
      {
        return redirect('login');
      }
      if (auth()->user()->isAdmin())
      {
        return $next($request);
      }

      return redirect('home');
    }
}