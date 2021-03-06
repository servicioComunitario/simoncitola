<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Roles</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered jambo_table">
                    <thead>
                        <tr>
                            <th>Nivel</th>
                            <th>Nombre</th>
                            <th style="width: 40px;" class="text-center">
                                <a href={{ route('roles.create') }} class="btn btn-success btn-xs" title="Crear">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $rol)
                        <tr>
                            <td>{{ $rol->nivel }}</td>
                            <td>{{ $rol->nombre}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-xs" title="Eliminar" data-toggle="modal" data-target=".modal-eliminacion" onclick="$('#id-eliminar').val('{{ $rol->id }}')">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href={{ route('roles.edit', $rol->id) }} class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>