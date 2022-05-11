<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function  __construct()
    {
        $this -> middleware('guest')->except('LogOut');
    }
    public function halaman_login()
    {
        return view('/login');
    }
    public function Login(Request $request)
    {
        if (Auth::attempt($request->only('nama','email','password'))){
            return redirect('/dasboard');
        }
        return redirect('/')->with('message','Prosses Login Anda Gagal Nik dan Nama tidak ditemukan seperti jodoh anda');
    }
    public function LogOut()
    {
        Auth::logout();
        return redirect('/login')->with('Alert','Anda Berhasil Logout');
    }
}
