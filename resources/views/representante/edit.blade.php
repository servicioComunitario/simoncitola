@extends('layouts.base')

@section('contenido')

  <form id="form-alumno" class="form-horizontal form-label-left" action="{{ route('representantes.update', $representante->id ) }}" method="POST">

		{{ method_field('PUT') }}

		@include('representante._form', ['representante' => $representante])

		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">
				<a href="{{ route('representantes.index') }}" class="btn btn-danger">Cancelar</a>
				<button class="btn btn-success" type="submit">Guardar</button>
			</div>
		</div>

		{{ csrf_field() }}

	</form>

@endsection