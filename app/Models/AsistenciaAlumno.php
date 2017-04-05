<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenciaAlumno extends Model
{
	protected $fillable = [
		'alumno_id',
		'dia_laborable_id',
		'presente'
	];

	public function alumno(){
    return $this->belongsTo('App\Models\Alumno');
	}
}
