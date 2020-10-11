<?php

namespace App\Http\Middleware;

use Closure;

class Quantri
{
    public function handle($request, Closure $next) {
        if(auth()->user()->idgroup == 1){
            return $next($request);
        }       
        return redirect('home')->with('loi','Bạn không có quyền admin');
   }
   
}
