<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{

  protected $fillable = [
    'cargo_id',
    'estado_id',
    'nombre',
    'nombre2',
    'apellido',
    'apellido2',
    'cedula',
    'fecha_nacimiento',
    'direccion_habitacion',
    'telefono',
    'telefono2',
    'fecha_inicio_institucion',
    'anio_servicio_nacional',
    'anio_servicio_estatal',
    'anio_servicio_municipal',
    'anio_servicio_otros',
    'titulo',
    'especialidad',
    'codigo',
    'funcion',
    'nivel_educativo',
    'centro_operativo_labora'
  ];

	public function actasInasistencias(){
    return $this->hasMany(ActaInasistencia::class);
  }

	public function asistenciasEmpleados(){
    return $this->hasMany(AsistenciaEmpleado::class);
  }

  public function cargo(){
    return $this->belongsTo(Cargo::class);
  }

  public function funcion(){
    return $this->belongsTo(Cargo::class, 'funcion', 'id');
  }

  public function estado(){
    return $this->belongsTo(Estado::class);
  }

  public function guardia(){
    return $this->hasOne(Guardia::class);
  }

  public function suplente(){
    return $this->hasMany(Cargo::class, 'id', 'empleado_suplente_id');
  }

  public function seccion(){
    return $this->hasOne(Seccion::class);
  }

  public function suplantado(){
    return $this->hasMany(Cargo::class, 'id', 'empleado_suplantado_id');
  }

  public function user(){
    return $this->hasOne(User::class);
  }

  public function inscripcion(){
    return $this->hasOne(Inscripcion::class);
  }


}
