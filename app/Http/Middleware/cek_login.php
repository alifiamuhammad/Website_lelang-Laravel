<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;

class cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$level)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        $user = Auth::user();
        if ($user->role==$level){
            return$next($request);
        }
       return redirect('login')->with('error', "Akses di tolak");
    }
}
