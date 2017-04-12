<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model{
	
	protected $fillable = [
		'nombre',
		'nivel'
	];

    public function user(){
    	return $this->hasOne(User::class);
  	}
}
