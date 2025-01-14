<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myFunction(Request $req, $varl = "")
    {
        $myinput = $req->input('myinput');

        $value_id = !empty($myinput) ? $myinput : $varl;

        return view('myview', ['value_id' => $value_id, 'myinput' => $myinput]);
    }
}