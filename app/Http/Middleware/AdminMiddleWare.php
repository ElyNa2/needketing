<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleWare
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
        if($request->user() && $request->user()->isAdmin($request->user()->role_id))
        {
            return $next($request);
        }
        
        return redirect('admin/login')->with('status','Login is not possible');
    }
}
