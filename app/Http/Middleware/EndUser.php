<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class EndUser
{
    public function __construct()
    {
        $this->auth = Auth::user();
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(isset($this->auth)){
            return $next($request);
        }else{
            return redirect('/sign-in');
        }
    }
}
