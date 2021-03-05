<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
Use Cache;
use App\Models\User;
use Carbon\Carbon; 

use Illuminate\Http\Request;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        if(Auth::check()){
            $expireAt = Carbon::now()->addMinutes(1);
            Cache::put('user-is-online-'.Auth::user()->id,true,$expireAt);
        }


        return $next($request);
    }
}
