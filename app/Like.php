<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'liking_user_id', 'liked_user_id'
    ];

}
