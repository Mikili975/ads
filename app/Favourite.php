<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $fillable = [
        'user_id', 'ad_id'
    ];

    public function ad()
    {
        return $this->belongsToMany(Ad::class);
    }
}
