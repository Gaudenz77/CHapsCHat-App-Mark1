<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermissionLevel
{
    public function handle($request, Closure $next, ...$levels)
    {
        $user = $request->user();

        if ($user && in_array($user->permissions_level, $levels)) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
