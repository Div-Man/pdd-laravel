<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Ban
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
         $user = Auth::user();
         
          if($user->ban == 1){
             echo 'Вы заблокированы, обратитесь в техподдержку!';
             die;
        }
        
        
        return $next($request);
    }
}
