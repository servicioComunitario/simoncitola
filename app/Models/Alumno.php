<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

	protected $fillable = [
		'estado_id',
		'nombre',
		'nombre2',
		'apellido',
		'apellido2',
		'cedula',
		'lugar_nacimiento',
		'fecha_nacimiento',
		'direccion'
	];

  public function estado(){
    return $this->belongsTo(Estado::class);
  }

  public function asistenciaAlumnos(){
    return $this->hasMany(AsistenciaAlumno::class);
  }

	public function inscripciones(){
    return $this->hasMany(Inscripcion::class);
  }

  public function procesarRequest($request)
  {
  	$datos_alumno['nombre']           = $request->get('nombreAlumno');
  	$datos_alumno['nombre2']          = $request->get('nombre2Alumno');
  	$datos_alumno['apellido']         = $request->get('apellidoAlumno');
  	$datos_alumno['apellido2']        = $request->get('apellido2Alumno');
  	$datos_alumno['cedula']           = $request->get('cedulaAlumno');
  	$datos_alumno['lugar_nacimiento'] = $request->get('lugarNacimientoAlumno');
  	$datos_alumno['fecha_nacimiento'] = $request->get('fechaNacimientoAlumno');
  	$datos_alumno['direccion']        = $request->get('direccionAlumno');
  	$datos_alumno['estado_id']        = Estado::$ACTIVO;

  	return $datos_alumno;
  }
  
}
