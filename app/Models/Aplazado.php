<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplazado extends Model
{

	protected $fillable = [
		'inscripcion_id',
		'motivo_id',
		'dia_laborable_id',
		'motivo'
	];

	public function inscripcion(){
    return $this->belongsTo(Inscripcion::class);
  }

	public function motivo(){
    return $this->belongsTo(Motivo::class);
  }
}
