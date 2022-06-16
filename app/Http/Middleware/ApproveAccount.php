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


        $nUser = User::where("user_id", $user->user_id)
            ->first();

           
            if ($nUser->is_approve == 1){
                return $next($request);
            }else if($nUser->is_approve == 2){
                return redirect('/owner-disapprove');
            }else{
                return redirect('/owner-pending');
            }
    }
}
