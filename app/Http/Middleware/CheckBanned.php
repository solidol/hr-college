<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
//use Illuminate\Support\Facades\Auth as FacadesAuth;
use Session;

class CheckBanned
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

        if (Auth::check() && (Auth::user()->status == 0)) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            Session::flash('error', 'Ваш обліковий запис заблоковано. Звіерніться за допомогою до адміністратора.');
            return redirect()->route('login')->with('error', 'Ваш обліковий запис заблоковано. Звіерніться за допомогою до адміністратора.');
        }

        return $next($request);
    }
}
