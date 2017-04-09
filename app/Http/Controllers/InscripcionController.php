<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Empleado;
use App\Models\Inscripcion;
use App\Models\Representante;
use App\Models\Seccion;


class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $inscripciones = Inscripcion::orderBy('id', 'desc')->get();
      // return view('inscripciones.index');
      return view('inscripciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('inscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInscripcionRequest $request){

/*
      // para validar los parametros
      $this->validate($request, [
        'nombrePadre' => 'required',
        'apellidoPadre'   => 'required|url'
      ]);
*/

      // mostrar en pantalla todos los parametros recibidos
      dd($request->all());

      // para leer un del request
      // $request->get('nombre_campo');
      // $request->get('nombrePadre');

      // atributos magicos
      $request->nombrePadre;

      $inscripcion = new Inscripcion;
      // $inscripcion->seccion_id = $request->seccion_id;

      $representante = new Representante;
      $representante->nombre = $request->nombrePadre;
      // $representante->save();

      // $madre = Representante::create( $request->all() );
      $madre = Representante::create( $request->only('nombreMadre', 'nombre2Madre' ) );



      return $redirect()->route('inscripciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
