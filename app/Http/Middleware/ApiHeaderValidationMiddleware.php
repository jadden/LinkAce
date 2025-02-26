<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiHeaderValidationMiddleware
{
    /**
     * This middleware ensures that the Content-Type header is set to
     * application/json for POST, PATCH or DELETE, otherwise it will return a 415 Unsupported
     * Media Type response.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (in_array($request->method(), ['GET', 'HEAD', 'OPTIONS'])) {
            return $next($request);
        }

        if ($request->header('Content-Type') !== 'application/json') {
            return response()->json([
                'error' => 'Invalid Content-Type header, LinkAce only supports JSON input'
            ], 415);
        }

        if ($request->header('Accept') !== 'application/json') {
            return response()->json([
                'error' => 'Invalid Accept header, LinkAce only supports JSON output'
            ], 415);
        }

        return $next($request);
    }
}
