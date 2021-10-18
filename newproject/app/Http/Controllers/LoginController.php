<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function mhslogin()
    {
        return view('login.mhslogin', [
            'title' => 'Login mahasiswa',
            'active' => 'login'
        ]);
    }
    public function adminlogin()
    {
        return view('login.adminlogin',[
            'title' => 'login admin',
            'active' => 'login'
        ]);
    }
}
