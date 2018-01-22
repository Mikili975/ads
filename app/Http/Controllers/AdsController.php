<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest')->only('home', 'index', 'show');
//    }

    public function home()
    {
        $ads = Ad::with(['user', 'category'])->paginate(10);


        return view('ads.home', compact('ads'));
    }

    public function index()
    {
        $ads = Ad::with(['user', 'category'])->paginate(10);

        return view('ads.index', compact('ads'));
    }

    public function create()
    {

        $categories = Category::all();

        return view('ads.create', compact('categories'));

    }

    public function store(Request $request)
    {

        $this->validate($request, ['title' => 'required',
            'body' => 'required'
        ]);

        $user = Auth::user();

        $user->publishAd();

        return redirect('/');

    }

    public function update(Request $request, $slug)
    {

        //dd($request);

        $ad = Ad::where('slug', $slug)->with('user')->first();

        $this->validate($request, ['title' => 'required',
            'body' => 'required'
        ]);

        $ad = $ad->user->updateAd($ad);

        return redirect('/ads/'.$ad->slug)->with(['ad' => $ad]);
    }

    public function show($slug)
    {

        //dd($slug);

        $ad = Ad::where('slug', $slug)->with('user')->first();

        //dd($ad);

        $nearbyAds = Ad::whereHas('user', function ($query) use($ad) {
            $query->where('users.city', $ad->user->city);
        })->get();


        return view('ads.show', compact('ad', 'nearbyAds'));

    }

    public function search()
    {

        if (!request()->key) {

            $errorMessage = 'Do not leave search field empty!!!';

        }

        $ads = Ad::where([
            ['title', 'LIKE', '%' . request()->key . '%'],
            ['body', 'LIKE', '%' . request()->key . '%'],
        ])->get();

        if ($ads->isEmpty()) {
            $errorMessage = 'Your search did not get any results!!!';
        }


        return view('ads.search-results', compact('ads', 'errorMessage'));
    }

    public function edit($slug)
    {
        if(!Auth::user())
        {
            session()->flash('error', 'You have to be logged in to do this shit!!!');

            return redirect('/');
        }

        $ad = Ad::where('slug', $slug)->with('user')->first();
        $categories = Category::all();

        if (Auth::user() == $ad->user) {
            return view('/ads/edit', compact('ad', 'categories'));
        }

        else
        {
            session()->flash('error', 'This is not your ad!!!');

            return redirect('/');
        }
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $ads = Ad::where('category_id', $category->id)->with('user', 'category')->paginate(10);

        return view('ads/category', compact('ads'));
    }

}