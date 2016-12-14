<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvier extends Model
{
    protected $fillable = ['provider_id','provider'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
