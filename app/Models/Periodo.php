<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model{

	protected $fillable = [
		'inicio',
		'fin',
		'nombre'
	];

	public function secciones(){
		return $this->hasMany(Seccion::class);
	}

	public function dias(){
		return $this->hasMany(Dia::class);
	}

}
