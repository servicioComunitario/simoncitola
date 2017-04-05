<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenciaDiariaAlumno extends Model{
	
	protected $fillable = [
		'guardia_id',
		'dia_laborable_id',
		'observacion'
	];

	public function guardia(){
    return $this->hasOne('App\Models\Guardia');
  }

}
