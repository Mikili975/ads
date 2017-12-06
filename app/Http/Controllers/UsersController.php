<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest')->only('create');
//    }

    public function showProfile()
    {
        $user = Auth::user();

        $userAds = $user->ads;

        return view('users.profile', compact ('user', 'userAds'));
    }

    public function show($urlName)
    {

        $user = User::where('url_name',$urlName)->first();

        return view('users.show', compact('user'));
    }

    public function allAdsByUser($urlName)
    {
        $ads = User::where('url_name',$urlName)->first()->ads;

        //dd($ads);

        return view('users.all', compact('ads'));
    }

    public function addToFavourite()
    {
        dd('tu sam');
    }
}
