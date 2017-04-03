<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

	protected $fillable = [
		'estado_id',
		'nombre',
		'nombre2',
		'apellido',
		'apellido2',
		'cedula',
		'lugar_nacimiento',
		'fecha_nacimiento',
		'direccion'
	];

  public function estado(){
    return $this->belongsTo('App\Estado');
  }

  public function asistenciasAlumnos(){
    return $this->hasMany('App\AsistenciaAlumno');
  }

	public function inscripciones(){
    return $this->hasMany('App\Inscripcion');
  }
  
}
