@extends('layouts.base')


@section('contenido')
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> Datos del alumno alumno {{-- <small>different form elements</small> --}} </h2>
          <ul class="nav navbar-right panel_toolbox">
            </li>
            <li><a class=""><i class=""></i> </a>
            <li><a class=""><i class=""></i> </a>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
        	<form class="form-horizontal form-label-left">
        	  <div class="form-group">
        	    <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer nombre: </label>
        	    <div class="col-md-9 col-sm-9 col-xs-12">
        	      <input type="text" name="nombre" class="form-control" placeholder="Primer nombre">
        	    </div>
        	  </div>
        	  <div class="form-group">
        	    <label for="nombre2" class="control-label col-md-3 col-sm-3 col-xs-12">Segundo nombre: </label>
        	    <div class="col-md-9 col-sm-9 col-xs-12">
        	      <input type="text" name="nombre2" class="form-control" placeholder="Segundo nombre">
        	    </div>
        	  </div>
        	  <div class="form-group">
        	    <label for="apellido" class="control-label col-md-3 col-sm-3 col-xs-12">Primer apellido: </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="apellido" placeholder="Primer apellido">
        	    </div>
        	  </div>
        	  <div class="form-group">
        	    <label for="apellido2" class="control-label col-md-3 col-sm-3 col-xs-12">Segundo apellido: </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="apellido2" placeholder="Segundo apellido">
        	    </div>
        	  </div>

        	  <div class="form-group">
        	    <label for="cedula" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span> Cedula:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="cedula" placeholder="Cedula">
        	    </div>
        	  </div>

        	  <div class="form-group">
        	    <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
        	    	Lugar de nacimiento:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
        	    </div>
        	  </div>

        	  <div class="form-group">
        	    <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
        	    	Fecha nacimiento:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="dd/mm/yyyy">
        	    </div>
        	  </div>
      	  </form>
				</div>
      </div>
    </div>


    <div class="col-md-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Antecedentes Familiares {{--<small>different form elements</small> --}}</h2>
          <ul class="nav navbar-right panel_toolbox">
            </li>
            <li><a class=""><i class=""></i> </a>
            <li><a class=""><i class=""></i> </a>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
        	<form class="form-horizontal form-label-left">
        	  <div class="form-group">
        	    <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer nombre: </label>
        	    <div class="col-md-9 col-sm-9 col-xs-12">
        	      <input type="text" name="nombre" class="form-control" placeholder="Primer nombre">
        	    </div>
        	  </div>
        	  <div class="form-group">
        	    <label for="nombre2" class="control-label col-md-3 col-sm-3 col-xs-12">Segundo nombre: </label>
        	    <div class="col-md-9 col-sm-9 col-xs-12">
        	      <input type="text" name="nombre2" class="form-control" placeholder="Segundo nombre">
        	    </div>
        	  </div>
        	  <div class="form-group">
        	    <label for="apellido" class="control-label col-md-3 col-sm-3 col-xs-12">Primer apellido: </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="apellido" placeholder="Primer apellido">
        	    </div>
        	  </div>
        	  <div class="form-group">
        	    <label for="apellido2" class="control-label col-md-3 col-sm-3 col-xs-12">Segundo apellido: </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="apellido2" placeholder="Segundo apellido">
        	    </div>
        	  </div>

        	  <div class="form-group">
        	    <label for="cedula" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span> Cedula:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="cedula" placeholder="Cedula">
        	    </div>
        	  </div>

        	  <div class="form-group">
        	    <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
        	    	Lugar de nacimiento:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
        	    </div>
        	  </div>

        	  <div class="form-group">
        	    <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
        	    	Fecha nacimiento:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="dd/mm/yyyy">
        	    </div>
        	  </div>
      	  </form>
				</div>
      </div>
    </div>
  </div>

@endsection
