<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function login()
    {
        return view('users.login-register');
    }

    public function register()
    {
        return view('users.register');
    }
}
