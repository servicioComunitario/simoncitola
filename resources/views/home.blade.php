{{-- @extends('layouts.app') --}}
@extends('layouts.base')

@section('nombreUsuario')
{{ Auth::user()->empleado->nombre }} {{ Auth::user()->empleado->apellido }}
@endsection

@section('contenido')
<div class="">

  <div class="row">

    Hola
  </div>
{{--
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
--}}


</div>
@endsection
