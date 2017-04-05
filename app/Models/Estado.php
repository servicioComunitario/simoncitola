<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{


	public function alumnos(){
    	return $this->hasMany('App\Models\Alumno');
  	}
}
