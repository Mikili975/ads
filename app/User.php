<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ads()
    {

        return $this->hasMany(Ad::class);

    }

    public function addUser() {

        $this->first_name = request('firstName');
        $this->last_name = request('lastName');
        $this->url_name = strtolower(request('firstName')).'.'.strtolower(request('lastName'));
        $this->email = request('email');
        $this->phone = request('phoneNumber');
        $this->city = request('city');
        $this->dob = Carbon::createFromDate(
                        request('year'),
                        request('month'),
                        request('day'),
                        'Europe/Belgrade'
                        )->toDateString();
        $this->password = Hash::make(request('password'));
        $this->save();

    }

    public function publishAd() {

        return $this->ads()->create([

            'user_id' => Auth::user()->id,
            'category_id' => request('categoryId'),
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'body' => request('body'),
            'price' => request('price'),

        ]);

    }

    public function favourite()
    {
        return $this->belongsToMany(Ad::class, 'favourites');
    }

    public function hasFavoured($ad)
    {
        return false;
    }

    public function addAdToFavourite($ad)
    {
        //dd($ad->id);

        $this->favourite()->attach($ad->id);
    }
}
