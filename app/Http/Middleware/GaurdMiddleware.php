<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;


class GaurdMiddleware
{
    /**
     * Handle an incoming reque
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (($request->path() == 'task/register' || $request->path() == 'task/login') && Session::get('user')) {
            return redirect('task/alltask');
        } elseif ($request->path() != 'task/login' && $request->path() != 'task/register' && !Session::get('user')) {
            return redirect('task/login')->with(['invalid' => 'Please login or register first']);
        } else {
            return $next($request);
        }
    }
}
