<?php

namespace App\Models;

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
    return $this->belongsTo(Estado::class);
  }

  public function asistenciaAlumnos(){
    return $this->hasMany(AsistenciaAlumno::class);
  }

	public function inscripciones(){
    return $this->hasMany(Inscripcion::class);
  }
  
}
