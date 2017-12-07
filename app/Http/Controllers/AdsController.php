<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest')->only('home', 'index', 'show');
//    }

    public function home()
    {
        $ads = Ad::with(['user','category'])->paginate(10);


        return view('ads.home', compact('ads'));
    }

    public function index()
    {
        $ads = Ad::with(['user','category'])->paginate(10);

        return view('ads.index', compact('ads'));
    }

    public function create ()
    {

        $categories = Category::all();

        return view('ads.create', compact('categories'));

    }

    public function store (Request $request)
    {

        $this->validate( $request, ['title' => 'required',
                                    'body' => 'required'
                                    ] );

        $user = Auth::user();

        $user->publishAd();

        //Mail::to($user)->send(new PostCreated($post));

        //redirektuj na taj novi post i jos da vidimo nesto
        return redirect('/');

    }

    public function show ($slug)
    {

        $ad = Ad::where('slug',$slug)->first();

        return view('ads.show', compact('ad'));

    }
}
