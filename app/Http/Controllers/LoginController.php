<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('login');
    }

    public function login ()
    {
        return view('/users/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function checkLoginCredentials()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            // Authentication passed...
            return redirect('/');
        } else {
            return 'greska';
        }
    }
}
