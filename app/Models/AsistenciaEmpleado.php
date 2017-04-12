<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenciaEmpleado extends Model{


	protected $fillable = [
		'dia_id',
		'empleado_id',
		'hora_entrada',
		'hora_salida',
		'hora_salida',
		'presente',
		'ausencia_justificada',
		'justificacion'
	];

	public function dia(){
		return $this->belongsTo(Dia::class);
	}

	public function empleado(){
    return $this->belongsTo(Empleado::class);
  }
}

