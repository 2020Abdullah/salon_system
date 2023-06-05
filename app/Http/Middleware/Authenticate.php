<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {


        // if (! $request->expectsJson()) {
        //     if ($request->is('employer') || $request->is('employer/*')) {
        //         // Redirect to admin login
        //         return redirect()->route('employer.showlogin');
        //     } else {
        //         // Redirect to front login
        //         return redirect()->route('login');
        //     }
        // }

        if (! $request->expectsJson()) {
            // return route('login');
            if($request->is('admin') || $request->is('admin/*')){
             //return to admin login
             return route('admin.login');
            }elseif($request->is('employer') || $request->is('employer/*')){
              //  return 'jjj';
             //return to front login in case there is front
             return route('employer.showlogin');
            }else{
                return route('login');

            }
         }

  
    }
}
