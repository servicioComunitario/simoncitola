<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{


	public function alumnos(){
    	return $this->hasMany('App\Alumno');
  	}
}
