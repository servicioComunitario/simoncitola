@extends('layouts.base')

@section('contenido')
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	            <div class="x_title">
	                <h2>Inscripciones</h2>
	                <ul class="nav navbar-right panel_toolbox">
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
	                        @foreach($inscripciones as $inscripcion)
	                        <tr>
	                            <td>
	                            	{{ $inscripcion->alumno->nombre." ".$inscripcion->alumno->apellido }}
                            	</td>
	                            <td>
	                            	{{ $inscripcion->responsable->nombre." ".$inscripcion->responsable->apellido }}
                            	</td>
	                            <td>{{ $inscripcion->seccion->nombre }}</td>
	                            <td>{{ $inscripcion->seccion->periodo->nombre }}</td>
	                            <td class="text-center">
	                                <button type="button" class="btn btn-danger btn-xs" title="Eliminar" data-toggle="modal" data-target=".modal-eliminacion" onclick="$('#id-eliminar').val('{{ $inscripcion->id }}')">
	                                    <i class="fa fa-trash-o"></i>
	                                </button>
	                                <a href={{ route('inscripciones.edit', $inscripcion->id) }} class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
	                            </td>
	                        </tr>
	                        @endforeach                        
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
