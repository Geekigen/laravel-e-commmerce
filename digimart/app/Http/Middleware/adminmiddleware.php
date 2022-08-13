<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $adminMail= Env('ADMIN_MAIL');
        if ($request->user()->email != $adminMail ) {
            return redirect()->back()->with('status',"Access denied ");

        }
        return $next($request);

    }
}
