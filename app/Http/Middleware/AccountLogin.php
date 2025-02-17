<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class AccountLogin
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
if(Auth::check()){
$user=Auth::user();
if($user->role_id==1){
    return redirect("dashboard");
}
else if($user->role_id==2){
    return redirect("dashboard");
}
else{
    Auth::logout();
    return redirect("login");
}
return redirect("account_login");
}
 return redirect()->with("successfully")->with("successfully");
    }
}
