<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }
    Function login(Request $req){
        // echo"<pre>";
        // print_r(req->email);
        // print_r(req->password);
        // echo "</pre>";
        $user = User::where('email',$req->email)->get();

        print_r($user);
        // return redirect('/');
    }
}
