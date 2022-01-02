<?php

namespace App\Models;

class Artikel extends Model{
	protected $table = 'artikel';
}
function seller (){
	return $this->belongsTo(user::class,'id_user');
}
