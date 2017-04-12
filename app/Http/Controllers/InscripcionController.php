<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Empleado;
use App\Models\Estado;
use App\Models\Inscripcion;
use App\Models\Parentesco;
use App\Models\Representante;
use App\Models\Seccion;
use App\Models\User;

use App\Http\Requests\CreateInscripcionRequest;

use DB;
use Redirect;
use Session;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $inscripciones = Inscripcion::orderBy('id', 'desc')->get();
      // return view('inscripciones.index');
      return view('inscripcion.index')->with( 'inscripciones', $inscripciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      $inscripcion = new Inscripcion;
      $alumno = new Alumno;
      $padre = new Representante;
      $madre = new Representante;
      $responsable = new Representante;
      $empleado = new Empleado;
      $secciones = Seccion::all();

      return view('inscripcion.create')->with( [
        'inscripcion' => $inscripcion,
        'alumno'      => $alumno,
        'padre'       => $padre,
        'madre'       => $madre,
        'responsable' => $responsable,
        'secciones'   => $secciones
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInscripcionRequest $request){

      DB::beginTransaction();
      try{
        // ALUMNO //////////////////////////////////////////////////////////////////////////
        $datos_alumno['nombre']           = $request->get('nombreAlumno');
        $datos_alumno['nombre2']          = $request->get('nombre2Alumno');
        $datos_alumno['apellido']         = $request->get('apellidoAlumno');
        $datos_alumno['apellido2']        = $request->get('apellido2Alumno');
        $datos_alumno['cedula']           = $request->get('cedulaAlumno');
        $datos_alumno['lugar_nacimiento'] = $request->get('lugarNacimientoAlumno');
        $datos_alumno['fecha_nacimiento'] = $request->get('fechaNacimientoAlumno');
        $datos_alumno['direccion']        = $request->get('direccionAlumno');
        $datos_alumno['estado_id']        = Estado::$ACTIVO;

        $alumno = Alumno::create($datos_alumno);

        // PADRE ///////////////////////////////////////////////////////////////////////////
        $datos_padre['nombre']            = $request->get('nombrePadre');
        $datos_padre['nombre2']           = $request->get('nombre2Padre');
        $datos_padre['apellido']          = $request->get('apellidoPadre');
        $datos_padre['apellido2']         = $request->get('apellido2Padre');
        $datos_padre['cedula']            = $request->get('cedulaPadre');
        $datos_padre['fecha_nacimiento']  = $request->get('fechaNacimientoPadre');
        $datos_padre['ocupacion']         = $request->get('ocupacionPadre');
        $datos_padre['direccion_trabajo'] = $request->get('direccionTrabajoPadre');
        $datos_padre['telefono']          = $request->get('telefonoPadre');
        $datos_padre['telefono2']         = $request->get('telefono2Padre');

        $datos_padre['parentesco_id']     = Parentesco::$PADRE;

        $padre = Representante::create($datos_padre);

        // MADRE ///////////////////////////////////////////////////////////////////////////
        $datos_madre['nombre']            = $request->get('nombreMadre');
        $datos_madre['nombre2']           = $request->get('nombre2Madre');
        $datos_madre['apellido']          = $request->get('apellidoMadre');
        $datos_madre['apellido2']         = $request->get('apellido2Madre');
        $datos_madre['cedula']            = $request->get('cedulaMadre');
        $datos_madre['fecha_nacimiento']  = $request->get('fechaNacimientoMadre');
        $datos_madre['ocupacion']         = $request->get('ocupacionMadre');
        $datos_madre['direccion_trabajo'] = $request->get('direccionTrabajoMadre');
        $datos_madre['telefono']          = $request->get('telefonoMadre');
        $datos_madre['telefono2']         = $request->get('telefono2Madre');
        $datos_madre['parentesco_id']     = Parentesco::$MADRE;

        $madre = Representante::create($datos_madre);
        
        // INSCRIPCION /////////////////////////////////////////////////////////////////////
        $datos_inscripcion['empleado_id']            = Auth::id();
        $datos_inscripcion['alumno_id']              = $alumno->id;
        $datos_inscripcion['seccion_id']             = $request->get('secciones');
        $datos_inscripcion['representante_padre_id'] = $padre->id;
        $datos_inscripcion['representante_madre_id'] = $madre->id;
        $datos_inscripcion['responsable_id']         = $madre->id;

        $datos_inscripcion['partida_nacimiento']     = $request->get('partidaNacimiento');
        $datos_inscripcion['certificado_vacuna']     = $request->get('certificadoVacunas');
        $datos_inscripcion['foto']                   = $request->get('fotos');
        $datos_inscripcion['copia_cedula_madre']     = $request->get('copiaCedulaMadre');
        $datos_inscripcion['constancia_trabajo']     = $request->get('constanciaTrabajo');
        $datos_inscripcion['carta_residencia']       = $request->get('cartaResidencia');
        $datos_inscripcion['otros_ninios_inscritos'] = $request->get('otrosNininos');
        $datos_inscripcion['colabora']               = $request->get('colabora');

        $datos_inscripcion['dia_laborable_id']       = '2017-04-09';

        $inscripcion = Inscripcion::create($datos_inscripcion);

        session()->flash('msg_success', 'Se realizo la inscripcion con exito');
        DB::commit();
      } catch(Exception $e){
        DB::rollback();
        session()->flash('msg_danger', $e->getMessage());
          // return Redirect::to('/empleado');
      };
      // session()->flash('msg_success', $e->getMessage());
      return redirect()->route('inscripcion.index');
/*
      // para validar los parametros
      $this->validate($request, [
        'nombrePadre' => 'required',
        'apellidoPadre'   => 'required|url'
      ]);
*/

      // mostrar en pantalla todos los parametros recibidos
      // dd($request->all());

      // para leer un del request
      // $request->get('nombre_campo');
      // $request->get('nombrePadre');

      // atributos magicos

      // $inscripcion->seccion_id = $request->seccion_id;

      // $representante->save();

      // $madre = Representante::create( $request->all() );

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
