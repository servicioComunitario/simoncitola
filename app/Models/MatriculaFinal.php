<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatriculaFinal extends Model{

	protected $fillable = [
		'seccion_id',
		'dia_laborable_id',
		'observacion'
	];

	public function diaLaborable(){
		return $this->belongsTo(DiaLaborable::class);
	}

	public function seccion(){
		return $this->belongsTo(Seccion::class);
	}

}
