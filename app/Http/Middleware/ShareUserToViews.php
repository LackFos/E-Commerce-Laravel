<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ShareUserToViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user(); // Get the authenticated user
        dd($user);
        View::share('user', $user); // Share the user with all views
        return $next($request);
    }
}
