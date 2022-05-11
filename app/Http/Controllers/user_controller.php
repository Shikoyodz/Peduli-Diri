<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\perjalanan;
use Illuminate\Http\Request;


class user_controller extends Controller
{
    public function Halaman_register()
    {
        return view('halamanregister');
    }

    public function Simpan_register(Request $request)
    {
        $request->validate([
            'nik'=>'required|unique:users,email|min:16|max:16|min:0',
            'name_lengkap'=>'required'
        ],
        [
            'nik.unique'=>'Nik sudah terdaftar',
            'name_lengkap.required'=>'Nama tidak boleh kosong'
        ]
    );
        $data = [
            'nama'=>($request)->name_lengkap,
            'email'=>($request)->nik,
            'password'=>bcrypt($request->nik)
        ];

   User::create($data);
//    dd($data);
   return redirect('/login')->with('AlertRegister','Anda Berhasil Register');
    }
}
