<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('etc.login');
    }

    public function inilogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect(route('home'))->with('login', 'Sukses Login');
        }

        return redirect()->back();
    }

    public function logout() 
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
