<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends controller
{
    function showLogin()
    {
        return view('template.login');
    }

    function LoginProcess()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('beranda')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password anda');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('beranda');
    }

    function registration()
    {
    }

    function forgotPassword()
    {
    }
}
