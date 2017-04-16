@extends('layouts.base')

@section('contenido')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Padres y Representantes</h2>
          <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="datatable" class="table table-striped table-bordered jambo_table">
            <thead>
              <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cédula</th>
                <th>Alumno</th>
                <th>Parentesco</th>
                <th style="width: 80px;" class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($representantes as $representante)
              <tr>
                <td>{{ $representante->nombre." ".$representante->nombre2 }}</td>
                <td>{{ $representante->apellido." ".$representante->apellido2 }}</td>
                <td>{{ $representante->cedula }}</td>
                
                  @if(count($representante->inscripciones) > 0)
                    <td>
                    {{ $representante->inscripciones->last()->alumno->nombre." ".$representante->inscripciones->last()->alumno->apellido }}
                    </td>
                    <td>
                      {{ $representante->inscripciones->last()->parentesco->nombre }}
                    </td>
                  @else
                    @if(count($representante->hijosP) > 0)
                    <td>
                      {{ $representante->hijosP->last()->nombre." ".$representante->hijosP->last()->apellido }}
                    </td>
                    <td>
                      Padre
                    </td>
                    @elseif(count($representante->hijosM) > 0)
                    <td>
                      {{ $representante->hijosM->last()->nombre." ".$representante->hijosM->last()->apellido }}
                    </td>
                    <td>
                      Madre
                    </td>
                    @endif
                  @endif
                </td>
                <td class="text-center">

                  <a href={{ route('representantes.show', $representante->id) }} class="btn btn-success btn-xs" title="Editar">
                    <i class="fa fa-eye"></i>
                  </a>
                
                  <button type="button" class="btn btn-danger btn-xs" title="Eliminar" data-toggle="modal" data-target=".modal-eliminacion" onclick="$('#id-eliminar').val('{{ $representante->id }}')">
                      <i class="fa fa-trash-o"></i>
                  </button>

                  <a href={{ route('representantes.edit', $representante->id) }} class="btn btn-primary btn-xs" title="Editar">
                    <i class="fa fa-pencil"></i>
                  </a>
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