<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{

	protected $fillable = [
		'empleado_id',
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
		'dia_id'
	];

  public function alumno(){
    return $this->belongsTo(Alumno::class);
  }

  public function aplazado(){
  	return $this->hasOne(Aplazado::class);
  }

  public function dia(){
		return $this->belongsTo(Dia::class);
	}

  public function responsable(){
  	return $this->belongsTo(Representante::class, 'responsable_id', 'id');
  }

  public function parentesco(){
		return $this->belongsTo(Parentesco::class);
	}

	public function seccion(){
		return $this->belongsTo(Seccion::class);
	}


}
