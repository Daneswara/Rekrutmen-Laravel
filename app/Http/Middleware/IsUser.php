<?php

namespace App\Http\Middleware;

use Closure;

class IsUser
{
    public function handle($request, Closure $next)
    {
        return session('user_id')?$next($request):route('login');
    }
}
