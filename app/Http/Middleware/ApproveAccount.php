<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ApproveAccount
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
        
        $user = Auth::user();;
        
        if(strtolower($user->role) === 'administrator'){
            return $next($request);
        }


        $isApprove = User::where("is_approve", 1)
            ->where("is_pending", 0)
            ->where("user_id", $user->user_id)
            ->exists();

           
            if ($isApprove){
                return $next($request);
            }else{
                return redirect('/owner-pending');
            }
    }
}
