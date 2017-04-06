<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model{
	
	protected $fillable = [
		'nombre'
	];

	public function representantes(){
		return $this->hasMany(Representante::class);
	}
}
