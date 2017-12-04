<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('create');
    }

    public function create()
    {
        return view('/users/new');
    }


    public function store()
    {
        $this->validate(
            request(),
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'phoneNumber' => 'required',
                'city' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]
        );

        $user = new User();

        $user->addUser();

        session()->flash('message', 'Thank you for registration!');

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            // Authentication passed...
            return redirect('/');
        }

    }
}
