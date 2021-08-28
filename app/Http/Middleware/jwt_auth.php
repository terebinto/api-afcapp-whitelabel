<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;


class jwt_auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {    
        try {
            $authorization = $request->bearerToken();
            if (!$authorization && strlen($authorization)) {
                throw new \Exception('Token not found');
            }

            $key = env("JWT_SECRET", ""); 

            $decodedJwt = JWT::decode($authorization, $key, array('HS256'));

         
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 401);
        }

        return $next($request);
    }
}
