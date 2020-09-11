<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::attempt(['pseudo' => $request->pseudo, 'password' => $request->password])) {
            if (Auth::user()->role==0) {
                return redirect()->route('lookEmploi',[Auth::user()->niveau_id]);
            }
            return redirect()->route('emploi.index');
        }

        return $next($request);
    }
}
