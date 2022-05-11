<?php

use App\Http\Controllers\login_controller;
use App\Http\Controllers\perjalanan_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.dokumentasi',);
})->middleware('auth');

Route::get('/dasboard', function () {
    return view('layouts.dasboard');
})->middleware('auth');

Route::get('/inputperjalanan', function () {
    return view('layouts.inputperjalanan');
})->middleware('auth');

Route::get('/register', [user_controller::class, 'Halaman_register']);
Route::post('/simpanUser', [user_controller::class, 'Simpan_register']);

Route::get('/inputperjalanan', [perjalanan_controller::class, 'Halaman_input'])->middleware('auth');
Route::post('/simpanData', [perjalanan_controller::class, 'Simpan_input'])->middleware('auth');

Route::get('/', [perjalanan_controller::class, 'index'])->middleware('auth');

Route::get('/login',[login_controller::class,'halaman_login'])->name("login");
Route::any('/createLogin',[login_controller::class, 'login']);
Route::get('/logout',[login_controller::class, 'LogOut']);

Route::get('/cari',[perjalanan_controller::class,'cariPerjalanan'])->middleware('auth');

Route::get('/urut',[perjalanan_controller::class,'urutPerjalanan'])->middleware('auth');
