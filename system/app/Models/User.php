<?php

namespace App\Models;

use App\Models\Artikel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_user');
    }
    function Artikel(){
    	return $this->hasMany(Artikel::class, 'id_user');
    }
}
