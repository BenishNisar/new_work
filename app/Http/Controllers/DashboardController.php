<?php

namespace App\Http\Controllers;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $users=User::all();
        return view("Home.welcome",compact("users"));
    }
    public function store(Request $request){
$validated=$request->validate([
"firstname"=>"required",
"lastname"=>"required",
"email"=>"required",
"password"=>"required",


]);
User::create($validated);
$users=User::all();

return view("welcome",compact("users"))->with("success");
}


public function edit(){

}

public function delete($id){
User::destroy($id);
return redirect()->route("welcome")->with("successfully");
}

}
