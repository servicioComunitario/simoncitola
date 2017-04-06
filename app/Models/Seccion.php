<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model{

	protected $fillable = [
		'nombre',
		'periodo_id',
		'empleado_id',
		'max_alumnos',
		'edad_alumno'
	];

	public function docente(){
	  return $this->belongsTo(Empleado::class);
	}

	public function inscripciones(){
		return $this->hasMany(Inscripcion::class);
	}

	public function matriculaFinal(){
		return $this->hasOne(MatriculaFinal::class);
	}

	public function periodo(){
		return $this->belongsTo(Periodo::class);
	}

}
