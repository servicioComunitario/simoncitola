<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplazado extends Model
{

	protected $fillable = [
		'inscripcion_id',
		'motivo_id',
		'dia_laborable',
		'motivo'
	];

	public function inscripcion(){
    return $this->hasOne('App\Models\Inscripcion');
  }

	public function motivo(){
    return $this->hasOne('App\Models\Motivo');
  }
}
