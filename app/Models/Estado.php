<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{

	protected $fillable = [
		'nombre'
	];


	public function alumnos(){
  	return $this->hasMany(Alumno::class);
  }

  public function empleados(){
  	return $this->hasMany(Empleado::class);
  }

}
