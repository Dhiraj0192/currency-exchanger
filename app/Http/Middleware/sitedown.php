<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class sitedown
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('sitedown')){
            
            // $request->session()->flash('LoginFirst','!!!You Have To Login First!!!');
            return redirect('/');
            // return back();
        }else{
            
            return $next($request);
        }
    }
}
