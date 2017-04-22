<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateRepresentanteRequest;


use App\Models\User;
use App\Models\Representante;

use DB;


class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  		$representantes = Representante::orderBy('nombre', 'asc')->get();

  		return view('representante.index')->with('representantes', $representantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Representante $representante)
    public function show($id)
    {

        $representante = Representante::find($id);

        $alumnos = $representante->hijos;

        foreach ($representante->inscripciones as $inscripcion) {
            $alumnos->push($inscripcion->alumno);
        }

        // $alumnos = $alumnos->unique('id');
        $alumnos = $alumnos->unique();

        return view('representante.show')->with([
            'representante' => $representante,
            'alumnos'       => $alumnos,
            'disabled'      => 'disabled'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Representante $representante)
    public function edit($id)
    {
        $representante = Representante::find($id);
        
        return view('representante.edit')->with([
            'representante' => $representante,
            'disabled'      => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepresentanteRequest $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
