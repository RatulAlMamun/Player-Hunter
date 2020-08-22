<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckPlayerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role !=  User::Role['Player']){
            if(Auth::user()->role == User::Role['Admin']){
                return redirect('admin-dashboard');
            }else{
                return redirect('/');
            }
        }
        return $next($request);
    }
}
