<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{

	protected $fillable = [
		'alumno_id',
		'seccion_id',
		'representante_padre_id',
		'representante_madre_id',
		'responsable_id',
		'partida_nacimiento',
		'certificado_vacuna',
		'foto',
		'copia_cedula_madre',
		'constancia_trabajo',
		'carta_residencia',
		'otros_ninios_inscritos',
		'colabora',
		'dia_laborable_id'
	];

  public function alumno(){
    return $this->belongsTo(Alumno::class);
  }

  public function aplazado(){
  	return $this->hasOne(Aplazado::class);
  }

  public function diaLaborable(){
		return $this->belongsTo(DiaLaborable::class);
	}

	public function seccion(){
    return $this->belongsTo(Seccion::class);
  }

  public function padre(){
  	return $this->belongsTo(Representante::class, 'representante_padre_id', 'id');
  }

  public function madre(){
  	return $this->belongsTo(Representante::class, 'representante_madre_id', 'id');
  }

  public function responsable(){
  	return $this->belongsTo(Representante::class, 'responsable_id', 'id');
  }


}
