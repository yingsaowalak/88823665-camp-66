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
        $user = User::where('email',$req->email)->first();
        if(Hash::check($req->password,$user->password)){
            session()->forget('error');
            swssion(['user'=> $user]);
            return redirect('/');
        }else{
            session(['error'=> 'ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง']);
            return view('login' , ['email'=>$req->email]);
        }

        //print_r($user);
        // return redirect('/');
    }
}
