<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class EditsController extends Controller
{
    public function index(Request $request, $id){
        $user=User::find($id);
        return view("edit",compact("user"));
    }
    public function update(Request $request,$id){

$request->validate([
"firstname"=>"required",
"lastname"=>"required",
"email"=>"required",
"password"=>"required",
]);

$user=User::find($id);
$user->update($request->all());
return redirect()->route("edit.index",$id)->with("successfully");

    }
}
