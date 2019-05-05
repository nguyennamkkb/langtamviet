<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class adminlog
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
        if (Auth::Check()) {
            $user=Auth::User();
            if ($user->id==1) {
               
                 return redirect('ltvadmin/dashboard');
            }else{
                return redirect('login');
            }
            
        else{
            return redirect('login');
        }
    }
}
