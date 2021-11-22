<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\CekhasilController;
use App\Http\Controllers\ProfilController;
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

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function()
{
    route::get('/', [HomeController::class, 'index']);
    route::get('/timeline', [TimelineController::class, 'index']);
    route::get('/daftar', [DaftarController::class, 'index']);
    route::post('/daftar/insert', [DaftarController::class, 'insert']);
    route::get('/cekhasil', [CekhasilController::class, 'index'])->name('cekhasil');
    route::get('/cekhasil/delete/{$id}', [CekhasilController::class, 'delete']);
    route::get('/profil', [ProfilController::class, 'index']);
});