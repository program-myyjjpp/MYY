<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

// 修正类名

class VerifyAPIToken
{
    public function handle(Request $request, Closure $next)
    {
        $accessToken = $request->bearerToken();

        if (!$accessToken || $accessToken !== config('resource.FIXED_REFRESH_TOKEN')) {
            return response()->json(['error' => 'Invalid access token'], ResponseAlias::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }
}
