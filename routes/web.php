<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
//  ASIK GAK OM !!!
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai')->middleware('auth');

Route::get('/tambah',[PegawaiController::class,'tambah'])->name('tambah');
Route::post('/insertdata',[PegawaiController::class,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[PegawaiController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[PegawaiController::class,'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[PegawaiController::class,'deletedata'])->name('deletedata');
Route::get('/detail/{id}',[PegawaiController::class,'detail'])->name('detail');
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'login']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

