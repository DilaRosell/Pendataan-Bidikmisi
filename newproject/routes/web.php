<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view( 'home', [
        "title" => "Home",
        "name" => "imagehome",
        "image" => "imagehome01.jpg"
    ] );
});

Route::get('/about', function () {
    return view( 'about',[
        "title" => "About",
        "image" => "imagehome.jfif"

    ]);
});


Route::get('/contact', function () {
    return view( 'contact', [
        "title" => "Contact"
    ] );
});

Route::get('/loginmhs', [LoginController::class, 'mhslogin']);

Route::get('/loginadm', [LoginController::class, 'adminlogin']);
