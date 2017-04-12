<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaLaborable extends Model{

  protected $table = 'dia_laborables';

	protected $fillable = [
		'periodo_id',
		'academico'
	];

	public function actaInasistencias(){
    return $this->belongsToMany(ActaInasistencia::class);
  }

  public function asistenciAlumnos(){
    return $this->hasMany(AsistenciaAlumno::class);
  }

  public function AsistenciaEmpleados(){
    return $this->hasMany(AsistenciaEmpleado::class);
  }

  public function guardia(){
    return $this->hasMany(Guardia::class);
    // return $this->hasOne(Guardia::class);
  }

  public function inscripciones(){
    return $this->hasMany(Inscripcion::class);
  }

  public function matriculaFinales(){
    return $this->hasMany(MatriculaFinal::class);
  }

  public function periodo(){
    return $this->belongsTo(Periodo::class);
  }
}
