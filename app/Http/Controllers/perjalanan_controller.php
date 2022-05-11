<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class perjalanan_controller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('authcek');
    // }

    // public function index()
    // {
    //     //Fungsi Auth::check untuk memeriksa apakah id pada user yang diberikan oleh auth akan sesuai
    //     if (Auth::check())
    //         $data = DB::table('perjalanans')
    //             //menyocokan id pada user dengan id_user pada perjalanas
    //             ->join('users', 'users.id', '=', 'perjalanans.id_user')
    //             ->select('users.email', 'perjalanans.id_user', 'perjalanans.tanggal', 'perjalanans.waktu', 'perjalanans.lokasi', 'perjalanans.Suhu')
    //             ->where('users.id', '=', auth()->user()->id)
    //             ->get();
    //     return view('layouts.dokumentasi', ['data' => $data]);
    // }

    public function index()
    {
        $perjalanan = perjalanan::all();
        $data = perjalanan::where('id_user', auth()->user()->id)->paginate(10);
        return view('layouts.dokumentasi', ['data' => $data]);
    }

    public function Halaman_input()
    {
        return view('layouts.inputperjalanan');
    }

    public function Simpan_input(Request $request)
    {
        $data = [
            'id_user' => auth()->user()->id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'Suhu' => $request->Suhu
        ];
        // dd($data);
        perjalanan::create($data);
        return redirect('/');
    }
    public function cariPerjalanan(Request $request)
    {
        // $search = $request->searching;

        // $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
        // ->orWhere(function ($query) use($search){
        //     $query->where('users.id', auth()->user()->id)
        //     ->where('perjalanans.lokasi', $search);
        // })->orWhere(function ($query) use($search){
        //     $query->where('users.id', auth()->user()->id)
        //     ->where('perjalanans.tanggal', date('Y-m-d', strtotime($search)));
        // })->orWhere(function ($query) use($search){
        //     $query->where('users.id', auth()->user()->id)
        //     ->where('perjalanans.waktu', $search);
        // })->orWhere(function ($query) use($search){
        //     $query->where('users.id', auth()->user()->id)
        //     ->where('perjalanans.Suhu', $search);
        // })
        // ->get(['users.nama', 'perjalanans.*']);

        // if ($data){
        //     return view('layouts.dokumentasi', ['data'=>$data])->with('message', 'data ditemukan');
        // }else{
        //     abort(404);
        // }

        if (!empty($request->input('lokasi')) && empty($request->input('tanggal')) && empty($request->input('waktu')) && empty($request->input('Suhu'))) {
            $cari = $request->lokasi;
            $data = perjalanan::where('id_user', auth()->user()->id)
                ->where('perjalanans.lokasi', 'LIKE', '%' . $cari . '%')
                ->paginate(10)->withQueryString();
                $data->appends($request->input());
            // $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            //     ->where(function ($query) use ($cari) {
            //         $query->where('users.id', auth()->user()->id)
            //             ->where('perjalanans.lokasi', 'LIKE', '%' . $cari . '%');
            //     })->get(['users.nama', 'perjalanans.*']);
            if ($data) {
                return view('layouts.dokumentasi', ['data' => $data, 'value'=>'lokasi'])->with('alert', 'data ditemukan');
            } else {
                abort(404);
            }
        } elseif (empty($request->input('lokasi')) && !empty($request->input('tanggal')) && empty($request->input('waktu')) && empty($request->input('Suhu'))) {
            $cari = $request->tanggal;
            $data = perjalanan::where('id_user', auth()->user()->id)
                ->where('perjalanans.tanggal', 'LIKE', '%' . $cari . '%')
                ->paginate(10)->withQueryString();
                $data->appends($request->input());
            // $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            //     ->where(function ($query) use ($cari) {
            //         $query->where('users.id', auth()->user()->id)
            //             ->where('perjalanans.tanggal', 'LIKE', '%' . $cari . '%');
            //     })->get(['users.nama', 'perjalanans.*']);
            if ($data) {
                return view('layouts.dokumentasi', ['data' => $data])->with('alert', 'data ditemukan');
            } else {
                abort(404);
            }
        } elseif (empty($request->input('lokasi')) && empty($request->input('tanggal')) && !empty($request->input('waktu')) && empty($request->input('Suhu'))) {
            $cari = $request->waktu;
            $data = perjalanan::where('id_user', auth()->user()->id)
                ->where('perjalanans.waktu', 'LIKE', '%' . $cari . '%')
                ->paginate(10)->withQueryString();
                $data->appends($request->input());
            // $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            //     ->where(function ($query) use ($cari) {
            //         $query->where('users.id', auth()->user()->id)
            //             ->where('perjalanans.waktu', 'LIKE', '%' . $cari . '%');
            //     })->get(['users.nama', 'perjalanans.*']);
            if ($data) {
                return view('layouts.dokumentasi', ['data' => $data])->with('messege', 'data ditemukan');
            } else {
                return redirect('/')->with('message', 'data tidak di temukan');
            }
        } elseif (empty($request->input('lokasi')) && empty($request->input('tanggal')) && empty($request->input('waktu')) && !empty($request->input('Suhu'))) {
            $cari = $request->Suhu;
            $data = perjalanan::where('id_user', auth()->user()->id)
                ->where('perjalanans.Suhu', 'LIKE', '%' . $cari . '%')
                ->paginate(10)->withQueryString();
                $data->appends($request->input());
            // $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
            //     ->where(function ($query) use ($cari) {
            //         $query->where('users.id', auth()->user()->id)
            //             ->where('perjalanans.Suhu', 'LIKE', '%' . $cari . '%');
            //     })->get(['users.nama', 'perjalanans.*']);
            return view('layouts.dokumentasi', ['data' => $data]);
        }
    }
    // untuk membuat desc dan asc
    public function urutPerjalanan(Request $request)
    {
        // $data = DB::table('perjalanans')
        //     ->join('users', 'users.id', '=', 'perjalanans.id_user')
        //     ->select('users.email', 'perjalanans.id_user', 'perjalanans.tanggal', 'perjalanans.waktu', 'perjalanans.lokasi', 'perjalanans.Suhu')
        //     ->where('users.id', '=', auth()->user()->id)
        //     ->orderBy('tanggal', 'DESC')
        //     ->get();
        // return view('layouts.dokumentasi', ['data' => $data]);

        $data = perjalanan::where('id_user', '=', auth()->user()->id);
        if ($request->input('tanggalDesc') == "Desc") {
            //$sorted = $data->SortByDesc('tanggal');
            $sorted = $data->orderBy('tanggal', 'desc')
            ->paginate(10)
            ->withQueryString();
            // return view('layouts.dokumentasi', ['data' => $sorted->values()->all()]);
            return view('layouts.dokumentasi', ['data' => $sorted]);
        } elseif ($request->input('tanggalAsc') == "Asc") {
            $sorted = $data->orderBy('tanggal', 'asc')
            ->paginate(10)
            ->withQueryString();
            return view('layouts.dokumentasi', ['data' => $sorted]);
        } elseif ($request->input('waktuDesc') == "Desc") {
            $sorted = $data->orderBy('waktu', 'desc')
            ->paginate(10)
            ->withQueryString();
            return view('layouts.dokumentasi', ['data' => $sorted]);
        } elseif ($request->input('waktuAsc') == "Asc") {
            $sorted = $data->orderBy('waktu', 'asc')
            ->paginate(10)
            ->withQueryString();
            return view('layouts.dokumentasi', ['data' => $sorted]);
        } elseif ($request->input('suhuDesc') == "Desc") {
            $sorted = $data->orderBy('Suhu', 'desc')
            ->paginate(10)
            ->withQueryString();
            return view('layouts.dokumentasi', ['data' => $sorted]);
        } elseif ($request->input('suhuAsc') == "Asc") {
            $sorted = $data->orderBy('Suhu', 'asc')
            ->paginate(10)
            ->withQueryString();
            return view('layouts.dokumentasi', ['data' => $sorted]);
        }
    }
}
