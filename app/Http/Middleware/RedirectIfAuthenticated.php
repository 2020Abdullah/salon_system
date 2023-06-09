<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            if (Auth::guard($guard)->check()) {
                //Write code for redirect both for admin or front in case login alerdy done
                if($request->is('admin') || $request->is('admin/*')){
                    //return backend
                    return redirect(RouteServiceProvider::ADMIN);
                }elseif($request->is('employer') || $request->is('employer/*')){
                    //return frontend
                    // return redirect(RouteServiceProvider::HOME); // if there is frontend
                    return redirect(RouteServiceProvider::Employer);
                }else{
                    return 'bbb';
                }
            }
        }
        return $next($request);
    }
}
