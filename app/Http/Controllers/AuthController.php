<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

//    public function login(Request $request)
//    {
//        $data = $request->only('email','password');
//
//    }
}
