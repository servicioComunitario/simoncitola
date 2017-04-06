<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenciaEmpleado extends Model{


	protected $fillable = [
		'dia_laborable_id',
		'empleado_id',
		'hora_entrada',
		'hora_salida',
		'hora_salida',
		'presente',
		'ausencia_justificada',
		'justificacion'
	];

	public function diaLaborable(){
		return $this->belongsTo(DiaLaborable::class);
	}

	public function empleado(){
    return $this->belongsTo(Empleado::class);
  }
}

