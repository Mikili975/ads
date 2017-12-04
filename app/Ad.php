<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'slug', 'price', 'user_id', 'category_id'//turi ovde jos sta treba, metnem te!!!
    ];

    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function category()
    {

        return $this->belongsTo(Category::class);

    }

}