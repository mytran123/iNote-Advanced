<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    protected $roleRepository;
    protected $userRepository;

    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            return redirect()->route('categories.list');
        } else {
            dd("Login Fail");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function create()
    {
        return view("backend.auth.register");
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        $role = $request->input('role-id');
//        dd($request);
        $this->userRepository->store($request);
        return redirect()->route("backend.auth.login");
    }
}
