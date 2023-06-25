<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $admin = Admin::where('token', $request->bearerToken())->first();
        if (!isset($admin)) {
            return Response()->json([
                "error" => true,
                "authroize" => false,
                "message" => "Unauthorized,Invalid token"
            ]);
        } else {
            return $next($request);
        }
    }
}
