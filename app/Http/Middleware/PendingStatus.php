<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\SignUP;
use Symfony\Component\HttpFoundation\Response;

class PendingStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        
        if(session()->has('loginId')){
            $id = session()->get('loginId');
            $authUser = SignUP::where('id',$id)->first();
            if ($authUser->verified_or_not == 'active') {
                return $next($request);
            }
            else {
                return redirect('/status');
            }
            
            
        }else{
            $request->session()->flash('LoginFirst','!!!You Have To Login First!!!');
            return redirect('/signin');
        }
    }
}
