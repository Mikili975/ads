<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class UsersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest')->only('create');
//    }

    public function showProfile()
    {
        $user = Auth::user();//->with('ads','adToFavourite');

        //dd($user);

        $userAds = $user->ads;

        return view('users.profile', compact ('user', 'userAds'));
    }

    public function show($urlName)
    {

        $user = User::where('url_name',$urlName)->with('ads','addToFavourite')->first();

//        foreach ($user->addToFavourite as $userAd) {
//
//            dd($userAd);
//
//        }

        return view('users.show', compact('user'));
    }

    public function allAdsByUser($urlName)
    {
        $ads = User::where('url_name',$urlName)->first()->ads;

        //dd($ads);

        return view('users.all', compact('ads'));
    }

    public function favouriteAdsByUser($urlName)
    {
        $userWithFavouriteAds = User::where('url_name',$urlName)->with('addToFavourite')->first();

        //dd($userWithFavouriteAds);

        return view('/users/favourite', compact('userWithFavouriteAds'));
    }

    public function addToFavourite()
    {
        dd(request('user'));
    }
}
