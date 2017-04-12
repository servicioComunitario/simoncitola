<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
	protected $fillable = [
		'parentesco_id',
		'nombre',
		'nombre2',
		'apellido',
		'apellido2',
		'cedula',
		'fecha_nacimiento',
		'ocupacion',
		'direccion:_trabajo',
		'telefono',
		'telefono2'
	];

	public function inscripcionPadre(){
		return $this->hasMany(Inscripcion::class, 'representante_padre_id', 'id' );
	}

	public function inscripcionMadre(){
		return $this->hasMany(Inscripcion::class, 'representante_madre_id', 'id' );
	}

	public function inscripcionResponsable(){
		return $this->hasMany(Inscripcion::class, 'responsable_id', 'id' );
	}

	
}
