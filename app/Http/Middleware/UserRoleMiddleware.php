<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class UserRoleMiddleware
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
        // return $next($request);
        if(Auth::check())
        {
            if(Auth::user()->user_status == 'მოსწავლე1')
            {
                return $next($request);
            }
            else{
                return redirect()->back()->with('status', 'თქვენ არ ხართ მოსწავლე');

            }
        }
        else{
            return redirect()->back()->with('status','გთხოვთ გაიაროთ ავტორიზაცია');
        }
    }
}
