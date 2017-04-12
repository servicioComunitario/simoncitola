@extends('layouts.base')

@section('contenido')
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<h1 class="">Mostrar Alumno</h1>
		</div>
	</div>

  <div class="form-horizontal form-label-left">
		@include('alumno._form', ['alumno' => $alumno, 'disabled' => $disabled])
	</div>
@endsection