<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;

class CheckJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     
        try {
            $user = JWTAuth::parseToken()->authenticate();
            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }
        } catch (TokenExpiredException $e) {
            \Log::info('Token expired');
            return response()->json(['error' => 'Token has expired'], 401);
        } catch (TokenInvalidException $e) {
            \Log::info('Token invalid');
            return response()->json(['error' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            \Log::info('Token absent');
            return response()->json(['error' => 'Token absent'], 401);
        }

        return $next($request);
    }

}
