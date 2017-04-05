<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActaInasistencia extends Model
{

	protected $fillable = [
		'dia_laborable_id',
		'empleado_id',
		'fecha_justificacion',
		'fecha_no_justificacion'
	];


	public function empleado(){
    return $this->belongsTo('App\Models\Empleado');
	}

	public function diasLaborables(){
    return $this->belongsToMany('App\Models\DiaLaboral');
  }
}
