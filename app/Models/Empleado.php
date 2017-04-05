<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{

	public function actasInasistencias(){
    return $this->hasMany('App\Models\ActaInasistencia');
  }

	public function asistenciasEmpleados(){
    return $this->hasMany('App\Models\AsistenciaEmpleado');
  }

  public function cargo(){
    return $this->belongsTo('App\Models\Empleado');
    // return $this->belongsTo('App\Models\Cargo', 'cargo_id', '');
  }

  public function user(){
    return $this->hasOne('App\Models\User');
  }




}
