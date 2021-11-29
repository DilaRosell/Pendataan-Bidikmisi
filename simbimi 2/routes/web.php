<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\Beranda_controller;
use App\Http\Controllers\Dashboard\Biodata_controller;
use App\Http\Controllers\Dashboard\Verifikasi_controller;
use App\Http\Controllers\Dashboard\Peserta_controller;
use App\Http\Controllers\Dashboard\Profil_controller;
use App\Http\Controllers\Dashboard\Pesan_controller;
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
Route::get('create-admin',function(){
	\DB::table('users')->insert([
		'role'=>1,
		'name'=>'Admin',
		'nim'=>'1',
		'email'=>'admin@simbimi.com',
		'id_registrasi'=>'-',
		'password'=>bcrypt('123')
	]);
});

Route::get('/', function () {
    return view( 'welcome', [
		"title" => "Home",
		"name" => "imagehome",
		"image" => "imagehome01.jpg"
	] );
	})->name('home');;

	Route::get('/about', function () {
        return view( 'about',[
            "title" => "About",
            "image" => "imagehome.jfif"
    
        ]);
    })->name('about');;

Route::get('keluar',function(){
	\Auth::logout();
	return redirect('/');
});

Route::get('/loginmhs', [LoginController::class, 'mhslogin'])->name('mhslogin');;
Route::get('/loginadm', [LoginController::class, 'adminlogin'])->name('adminlogin');;

Route::get('/registermhs', [RegisterController::class, 'index'])->name('registermhs');;
Route::post('/registermhs', [RegisterController::class, 'store'])->name('registermhs');;

Route::group(['middleware'=>'auth'],function(){

    Route::get('/dashboard', [Beranda_controller::class, 'index']);

    Route::get('/biodata', [Biodata_controller::class, 'index']);
    Route::post('/biodata/{users}', [Biodata_controller::class, 'store']);
    Route::put('/biodata/{users}', [Biodata_controller::class, 'update']);

	// cetak biodata
	Route::get('/cetak-biodata', [Biodata_controller::class, 'cetak']);

	// verifikasi peserta
    Route::get('/verifikasi', [Verifikasi_controller::class, 'index']);
    Route::post('/verifikasi', [Verifikasi_controller::class, 'verifikasi']);

	// Data peserta
    Route::get('/peserta', [Peserta_controller::class, 'index']);
    Route::get('/peserta/verifikasi', [Peserta_controller::class, 'diverifikasi']);
    Route::get('/peserta/belum-verifikasi', [Peserta_controller::class, 'belum_verifikasi']);

    Route::get('/peserta/{id}', [Peserta_controller::class, 'edit']);
    Route::get('/peserta/detail/{id}', [Peserta_controller::class, 'detail']);
    Route::put('/peserta/{id}', [Peserta_controller::class, 'update']);

    Route::delete('/peserta/{id}', [Peserta_controller::class, 'delete']);

    Route::get('/peserta/{id}/lulus', [Peserta_controller::class, 'lulus']);

	// profile sekolah
    Route::get('/profile-sekolah', [Profile_controller::class, 'index']);
    Route::put('/profile-sekolah', [Profile_controller::class, 'update']);

	// pesan
    Route::get('/pesan', [Pesan_controller::class, 'index']);

    Route::get('/pesan/add', [Pesan_controller::class, 'add']);
    Route::post('/pesan/add', [Pesan_controller::class, 'store']);

    Route::get('/pesan/{id}', [Pesan_controller::class, 'detail']);

});

Auth::routes();

Route::get('/home', function(){
	return redirect('dashboard');
});


