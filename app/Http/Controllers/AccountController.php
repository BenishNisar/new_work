<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index(){
        return view("Auth.accountlogin");
    }
    public function store(Request $request){
$request->validate([
"email"=>"required",
"password"=>"required",
]);
$credentials=$request->only("email","password");
if(Auth::attempt($credentials)){
$user=Auth::user();
if($user->role_id==1){
return redirect("/dashboard");
}
else if($user->role_id==2){
    return view("/manage");
    }
else{
Auth::logout();
    return redirect("login");
}
return redirect("/accountlogin")->with("successfully");
}
    }

public function logout(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect("/accountlogin")->with("successfully");
}
}
