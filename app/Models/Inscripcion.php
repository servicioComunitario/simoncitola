<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
	public function inscripciones(){
    return $this->hasMany('App\Models\Inscripcion');
  }

  public function alumno(){
    return $this->belongsTo('App\Models\Alumno');
  }
}
