<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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


    public function asistenciaEmpleados(){
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

    public static function getSemanaMes($fecha = null) {
        
        if ($fecha === null) 
            $fecha = time();
        
        $semana = date('W', $fecha); // La semana comienza el lunes
        $primeraSemanaMes = date('W', strtotime(date('Y-m-01', $fecha)));

        return 1 + ($semana < $primeraSemanaMes ? $semana : $semana - $primeraSemanaMes);
    }


    public static function getDiasAnio($anio) {
        $primerDia = Carbon::parse('first day of January '.$anio)->format('d-m-Y');
        $ultimoDia = Carbon::parse('last day of December '.$anio)->format('d-m-Y');

        $dias = array();

        if (is_string($primerDia) === true) 
            $primerDia = strtotime($primerDia);

        if (is_string($ultimoDia) === true ) 
            $ultimoDia = strtotime($ultimoDia);

        if ($primerDia > $ultimoDia) 
            return createDateRangeArray($ultimoDia, $primerDia);

        $i=0;
        $inicioSemana = ""; 
        $semanaMes    = 0;
        $semanaAnio   = 0;
        do {

            $dia = Carbon::create(date('Y', $primerDia), date('m', $primerDia), date('d', $primerDia), 12, 0, 0);
            
            $finDeSemana = ($dia->dayOfWeek === Carbon::SATURDAY || $dia->dayOfWeek === Carbon::SUNDAY);
            
            if ($dia->dayOfWeek === Carbon::SUNDAY) {
                $diaDeSemana = 7;
            }else{
                $diaDeSemana = $dia->dayOfWeek;
            }

            $semanaMes = self::getSemanaMes(strtotime(date('Y-m-d', $primerDia)));

            if($inicioSemana != $dia->startOfWeek()){
                $semanaAnio++;
                $inicioSemana = $dia->startOfWeek();
            }

            $dias[] = [
                'dia'        => date('j', $primerDia),
                'mes'        => date('n', $primerDia),
                'anio'       => date('Y', $primerDia),
                'fecha'      => date('Y-m-d', $primerDia),
                'semanaMes'  => $semanaMes,
                'semanaAnio' => $semanaAnio,
                'finSemana'  => $finDeSemana,
                'diaSemana'  => $diaDeSemana,
                'tipo'       => 0
            ];
          
            $primerDia = strtotime("+ 1 day", $primerDia);

            $i++;
        } while($primerDia <= $ultimoDia);

        return $dias;
    }
}
