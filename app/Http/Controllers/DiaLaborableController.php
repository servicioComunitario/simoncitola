<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaLaborable;
use Carbon\Carbon;

class DiaLaborableController extends Controller
{

	public static function fechas($start, $end) {
		$range = array();

		if (is_string($start) === true) $start = strtotime($start);
		if (is_string($end) === true ) $end = strtotime($end);

		if ($start > $end) return createDateRangeArray($end, $start);
		$i=0;
		do {
			$dia = Carbon::create(date('Y', $start), date('m', $start), date('d', $start), 12, 0, 0);
			$finDeSemana = ($dia->dayOfWeek === Carbon::SATURDAY || $dia->dayOfWeek === Carbon::SUNDAY);
			if ($dia->dayOfWeek === Carbon::SUNDAY) {
				$diaDeSemana = 7;
			}else{
				$diaDeSemana = $dia->dayOfWeek;
			}

			$range[] = ['dia'=> date('j', $start), 'mes' => date('n', $start), 'anio' => date('Y', $start),'fecha' => date('Y-m-d', $start) , 'semanaDelMes' => $dia->weekOfMonth, 'finDeSemana' => $finDeSemana, "diaDeSemana" => $diaDeSemana, 'estado' => 0];
			//dd($range[$i]->weekOfMonth);
			//['dia'=> date('d', $start), 'mes' => date('m', $start), 'anio' => date('Y', $start)];
			//date('Y-m-d', $start);
			$start = strtotime("+ 1 day", $start);
			$i++;
		} while($start <= $end);

		return $range;
	}


    public function index()
    {
		$año=Carbon::now()->format('Y');
		//dd($año);
		$inicio = Carbon::parse('first day of January'.$año)->format('d-m-Y');
		//dd($inicio);
		$fin = Carbon::parse('last day of December'.$año)->format('d-m-Y');
		$todosLosDias=$this->fechas($inicio,$fin);
		//dd($todosLosDias);
 		/*return view('diaLaborable.index');*/
 		return response()->json($todosLosDias);

    }
}
