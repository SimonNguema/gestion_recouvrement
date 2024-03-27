<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthentificationPageController extends Controller
{
    public function login(){
        return view('authentification.login');
    }

    public function forgotPassword(){
        return view('authentification.forgotpassword');
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
