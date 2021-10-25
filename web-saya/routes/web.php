<?php

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
    return view('layouts.home');
});

route::view('/timeline','layouts.timeline');
route::view('/daftar','layouts.daftar');
route::view('/cekhasil','layouts.cekhasil');
route::view('/profil','layouts.profil');
route::view('/gantips','layouts.gantips');