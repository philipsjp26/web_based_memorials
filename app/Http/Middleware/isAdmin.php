<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class isAdmin
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
        if (Auth::check()) {
            $role = auth()->user()->role;
            if($role == 'admin'){
                $request->attributes->add(['page_login' => false]);
                return $next($request);
            }
            Alert::error('Error', 'Only Role Admin');
            return redirect()->route('dashboardLogin');
        } else if (!Auth::check()) {
            return redirect()->route('dashboardLogin');
        }
    }
}
