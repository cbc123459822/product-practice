<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Providers\RouteServiceProvider;

class RoleWeight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $weight): Response
    {
        $userRole = $request->user()?->user_role ?? 0;

        // 嘗試進入了不是自己身分該進的路由
        if (!str_contains($weight, strval($userRole))) {

            // 若身分是管理員
            if ($userRole == '1') {
                // 送去後臺首頁
                return redirect(RouteServiceProvider::ADMIN);
            }
            
            // 身分不是管理員
            // 送去前臺首頁
            return redirect(RouteServiceProvider::HOME);
        }
        
        return $next($request);
    }
}
