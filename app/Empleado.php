<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{

	public function actasInasistencias(){
    return $this->hasMany('App\ActaInasistencia');
  }

	public function asistenciasEmpleados(){
    return $this->hasMany('App\AsistenciaEmpleado');
  }

  public function cargo(){
    return $this->belongsTo('App\Empleado');
    // return $this->belongsTo('App\Cargo', 'cargo_id', '');
  }

  public function user(){
    return $this->hasOne('App\User');
  }




}
