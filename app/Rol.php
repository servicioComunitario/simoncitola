<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
	protected $fillable = [
		'nombre',
		'nivel'
	];

    public function users(){
    	return $this->hasMany('App\User');
  	}
}
