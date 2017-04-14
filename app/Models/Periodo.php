<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Periodo extends Model{

	protected $fillable = [
		'inicio',
		'fin',
		'nombre'
	];

	public function secciones(){
		return $this->hasMany(Seccion::class);
	}

	public function getInicioAttribute($inicio)
    {
        return Carbon::parse($inicio)->format('d-m-Y');
    }

    public function setInicioAttribute($inicio)
    {
        $this->attributes['inicio'] = Carbon::parse($inicio)->toDateString();
    }

    public function getFinAttribute($fin)
    {
        return Carbon::parse($fin)->format('d-m-Y');
    }

    public function setFinAttribute($fin)
    {
        $this->attributes['fin'] = Carbon::parse($fin)->toDateString();
    }

}
