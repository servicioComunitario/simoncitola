<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaInasistencia extends Model{
  
  public function actasInasistencias(){
    return $this->belongsToMany('App\ActaInasistencia');
  }
}
