<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
	public function inscripciones(){
    return $this->hasMany('App\Inscripcion');
  }

  public function alumno(){
    return $this->belongsTo('App\Alumno');
  }
}
