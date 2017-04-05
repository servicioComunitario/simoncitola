<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaLaboral extends Model
{

	public function actasInasistencias(){
    return $this->belongsToMany('App\Models\ActaInasistencia');
  }
}
