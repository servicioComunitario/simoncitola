@extends('layouts.base')

@section('contenido')	
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <h1 class="">Listado de Cargos</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cargos</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered jambo_table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Nivel</th>
                            <th style="width: 40px;" class="text-center">
                                <a href={{ route('cargos.create') }} class="btn btn-success btn-xs" title="Crear">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cargos as $cargo)
                        <tr>
                            <td>{{ $cargo->nombre}}</td>
                            <td>{{ $cargo->nivel }}</td>
                            <td class="text-center">
                                <form action={{ route('cargos.destroy', $cargo->id) }} method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Eliminar"><i class="fa fa-trash-o"></i></button>
                                    <a href={{ route('cargos.edit', $cargo->id) }} class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
                                </form>
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

