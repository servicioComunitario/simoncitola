@extends('layouts.base')

@section('contenido')
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<h1 class="">Crear Cargo</h1>
		</div>
	</div>

	@include('cargo._formulario', ['cargo' => $cargo])
	
@endsection

