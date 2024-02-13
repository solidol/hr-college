<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Session;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
            return redirect('login');

        $user = Auth::user();

        if ($user->isAdmin())
            return $next($request);

        foreach ($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if ($user->hasRole($role)) {
                return $next($request);
            }
        }
        Session::flash('error', 'У вас немає  відповідної ролі! Доступ заборонено!');
        return redirect('home')->with('error', 'У вас немає  відповідної ролі! Доступ заборонено!');
    }

    /*

    public function handle(Request $request, Closure $next)
    {
        //return $next($request);
        if (Auth::user() &&  Auth::user()->hasRole('student')) {
            return $next($request);
       }
       Session::flash('error', 'У вас немає ролі Студент! Доступ заборонено');
       return redirect('home')->with('error','У вас немає ролі Студент! Доступ заборонено');
    }
    */
}
