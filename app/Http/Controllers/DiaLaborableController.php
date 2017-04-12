<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaLaborable;

class DiaLaborableController extends Controller
{
	


    public function index()
    {
		
		$diasAnio = DiaLaborable::getDiasAnio(2017);

 		return view('diaLaborable.index')->with('diaLaborables', json_encode($diasAnio));
    }
}
