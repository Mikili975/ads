<?php

namespace App;

use App\Http\Controllers\AdsController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

    public function updateAd($ad) {

        Ad::where('slug', $ad->slug)->update([

            'category_id' => request('categoryId'),
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'body' => request('body'),
            'price' => request('price'),

        ]);

        return $ad->fresh(['user']);
    }

    public function favourite()
    {
        return $this->belongsToMany(Ad::class, 'favourites')->withPivot('ad_id', 'user_id');
    }

    public function hasFavoured($ad)
    {
        return !(DB::table('favourites')
            //$this->favourite()
            ->where('ad_id', $ad->id)
            ->where('user_id', $this->id)
            ->get()
            ->isEmpty());
    }

    public function addAdToFavourite($ad)
    {
        if (!$this->hasFavoured($ad))
        {
            $this->favourite()->attach($ad->id);
        }
        else
        {
            $messages = [
                'alreadyFavoured' => 'Ad is already added to favourite'
            ];

            return redirect()->back()->with('messages', $messages);
        }
    }

    public function removeAdFromFavourite($ad)
    {
        if ($this->hasFavoured($ad))
        {
            $this->favourite()->detach($ad->id);
        }
        else
        {
            $messages = [
                'notFavoured' => 'Ad has not been liked yet'
            ];

            return redirect()->back()->with('messages', $messages);
        }
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'likes', 'liking_user_id', 'liked_user_id');
    }

    public function areWeFriends($user)
    {
        return !(DB::table('likes')
            //$this->friends()
            ->where('liking_user_id', $this->id)
            ->where('liked_user_id', $user->id)
            ->get()
            ->isEmpty());
    }

    public function friendUser($user)
    {
        if (!$this->areWeFriends($user))
        {
            $this->friends()->attach($user->id);
        }
        else
        {
            $messages = [
                'alreadyLiked' => "You've already liked this user"
            ];

            return redirect()->back()->with('messages', $messages);
        }
    }

    public function unfriendUser($user)
    {
        if ($this->areWeFriends($user))
        {
            $this->friends()->detach($user->id);
        }
        else
        {
            $messages = [
                'notLiked' => "You haven't liked this user yet!!!"
            ];

            return redirect()->back()->with('messages', $messages);
        }
    }

}
