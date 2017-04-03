<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaLaboral extends Model
{

	public function actasInasistencias(){
    return $this->belongsToMany('App\ActaInasistencia');
  }
}
