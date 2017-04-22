<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
	protected $fillable = [
		'nombre',
		'nombre2',
		'apellido',
		'apellido2',
		'cedula',
		'sexo',
		'fecha_nacimiento',
		'ocupacion',
		'direccion:_trabajo',
		'telefono',
		'telefono2'
	];

	public function inscripciones(){
		return $this->hasMany(Inscripcion::class, 'responsable_id', 'id' );
	}

/*
	public function hijosP(){
		return $this->hasMany(Alumno::class, 'padre_id', 'id' );
	}

	public function hijosM(){
		return $this->hasMany(Alumno::class, 'madre_id', 'id' );
	}
*/
	public function hijos()
	{
		if ($this->sexo == 'masculino') {
			return $this->hasMany(Alumno::class, 'padre_id', 'id' );
		} else{
			return $this->hasMany(Alumno::class, 'madre_id', 'id' );			
		}
	}
	
}
