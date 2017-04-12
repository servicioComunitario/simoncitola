<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInscripcionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // se asegura de que el usuario que esta haciendo la inscripcion este autorizado
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nombreAlumno' => 'required',
          // 'nombre2Alumno' => 'required',
          'apellidoAlumno'   => 'required',
          // 'apellido2Alumno'   => 'required',
          'cedulaAlumno'   => 'required',
          'lugarNacimientoAlumno'   => 'required',
          'fechaNacimientoAlumno'   => 'required',

          'seccion' => 'required',
          'responsable' => 'required',
          'partidaNacimiento'   => 'required',
          'certificadoVacunas'   => 'required',
          'fotos'   => 'required',
          'copiaCedulaMadre'   => 'required',
          'constanciaTrabajo'   => 'required',
          'cartaResidencia'   => 'required',
          'otrosNininos'   => 'required',
          'colabora'   => 'required',

          'nombrePadre' => 'required',
          // 'nombre2Padre' => 'required',
          'apellidoPadre'   => 'required',
          // 'apellido2Padre'   => 'required',
          'cedulaPadre'   => 'required',
          'fechaNacimientoPadre'   => 'required',
          'ocupacionPadre'   => 'required',
          'direccionTrabajoPadre'   => 'required',
          'telefonoPadre'   => 'required',
          // 'telefono2Padre'   => 'required',

          'nombreMadre' => 'required',
          // 'nombre2Madre' => 'required',
          'apellidoMadre'   => 'required',
          // 'apellido2Madre'   => 'required',
          'cedulaMadre'   => 'required',
          'fechaNacimientoMadre'   => 'required',
          'ocupacionMadre'   => 'required',
          'direccionTrabajoMadre'   => 'required',
          'telefonoMadre'   => 'required',
          // 'telefono2Madre'   => 'required'
        ];
    }
}
