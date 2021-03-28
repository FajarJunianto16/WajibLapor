<?php

namespace App\Http\Middleware;

use Closure;

class Petugas
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
        if(!AUth()->guard('petugas')->check())
        {
           return redirect()->to('/petugas/login');
        }
        if (!Auth()->guard('petugas')->user()->level == "petugas");
        {
            return redirect()->to('/petugas/login');
        }




        return $next($request);
    }
}
