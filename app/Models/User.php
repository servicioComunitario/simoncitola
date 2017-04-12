<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Rol;

class User extends Authenticatable
{
  protected $table = "users";

  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'email', 'password', 'rol_id', 'empleado_id'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function empleado(){
    return $this->belongsTo(Empleado::class);
  }

  public function rol(){
    return $this->belongsTo(Rol::class);
  }

  public function tipodeRol()
  {
    $rol=Rol::where('id','=',$this->rol_id)->firstOrFail();
    if ($rol->nivel<=0) {
      return 1;
    }
    return $rol;
  }
}