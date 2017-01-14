<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class anggotas extends Model
{
    

    protected $fillable = [
        'nama', 'email', 'password', 'komunitas', 'kampus', 'alamatKampus', 'deskripsi'
    ];

  
    protected $hidden = [
        'password', 'remember_token',
    ];

    function socialProviders()
    {
        return $this->hasMany(SocialProvier::class);
    }
}
