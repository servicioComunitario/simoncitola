@extends('layouts.base')

@section('contenido')
  <div class="form-horizontal form-label-left">
		@include('representante._form', ['representante' => $representante, 'disabled' => $disabled])



		<div class="row"> {{-- INFORMACION DEL PADRES Y REPRESENTANTES --}}
		  <div class="col-md-12 col-xs-12">
		    <div class="x_panel">
		      <div class="x_title">
		        <h2> Hijo(s) </h2>
		        <ul class="nav navbar-right panel_toolbox">
		          <li><a class=""><i class=""></i> </a>
		          <li><a class=""><i class=""></i> </a>
		          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		        </ul>
		        <div class="clearfix"></div>
		      </div>

		      <div class="x_content">
	          <table id="datatable" class="table table-striped table-bordered jambo_table">
              <thead>
                <tr>
                  <th>Alumno</th>
                  <th>Representante</th>
                  <th>Sección</th>
                  <th>Periodo</th>
                  <th style="width: 40px;" class="text-center">
                    <a href={{ route('inscripciones.create') }} class="btn btn-success btn-xs" title="Crear">
                        <i class="fa fa-plus"></i>
                    </a>
                  </th>
                </tr>
              </thead>
              <tbody>
              @if(count($representante->alumnos))
              	@foreach($representante->alumnos as $alumno)
                <tr>
                	<td>{{ $alumno->nombre }}</td>
                	<td></td>
                	<td></td>
                	<td></td>
                	<td></td>

                </tr>
              	@endforeach
            	@endif
              </tbody>
	          </table>
		      </div>
		    </div>
		  </div>
		</div> {{-- CIERRE INSCRIPCIONES --}}

	</div>

	
@endsection