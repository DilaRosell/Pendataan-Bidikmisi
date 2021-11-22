<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){

    return view ('layouts.home');
   }

   function timeline(){
    return view ('layouts.timeline');
   }

   function daftar(){
       return view('layouts.daftar');
   }

   function cekhasil(){
    return view('layouts.cekhasil');
}
}
