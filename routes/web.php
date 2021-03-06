<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function() {[

    Route::get('/register', 'RegisterController@create'),

    Route::post('/users/store', 'RegisterController@store'),

    Route::get('/login', 'LoginController@login'),

    Route::post('/check', 'LoginController@checkLoginCredentials')
    ];
});

Route::middleware('auth')->group(function() {[

    Route::get('/users/profile', 'UsersController@showProfile'),

    Route::get('/users/add-to-favourites/{urlName}', 'UsersController@addToFavourite'),

    Route::get('/users/remove-from-favourites/{urlName}', 'UsersController@removeFromFavourite'),

    Route::get('/users/{urlName}/like', 'UsersController@likeUser'),

    Route::get('/users/{urlName}/unlike', 'UsersController@unlikeUser'),

    Route::get('/users/{urlName}/favourite', 'UsersController@favouriteAdsByUser'),

    Route::get('/logout', 'LoginController@logout'),

    Route::get('/ads/create', 'AdsController@create'),

    Route::post('/ads/store', 'AdsController@store'),

    Route::post('/ads/{slug}/update', 'AdsController@update'),

    Route::get('/ads/{slug}/edit', 'AdsController@edit')
    ];
});

Route::get('/', 'AdsController@home');

Route::get('/index', 'AdsController@index');

Route::get('/users/{urlName}', 'UsersController@show');

Route::get('/users/{urlName}/all', 'UsersController@allAdsByUser');

Route::get('/ads/{slug}', 'AdsController@show');

Route::get('/search', 'AdsController@search');

Route::get('/categories/{slug}', 'AdsController@category');