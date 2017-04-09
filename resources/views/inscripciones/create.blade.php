@extends('layouts.base')

@section('contenido')

  <div class="row">

    {{-- INFORMACION DEL ALUMNO  --}}
    <div class="col-md-6 col-xs-12">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Datos del alumno alumno </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class=""><i class=""></i> </a>
                <li><a class=""><i class=""></i> </a>
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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

      {{-- DOCUMENTOS PRESENTADOS --}}
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Datos presentados </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class=""><i class=""></i> </a>
                <li><a class=""><i class=""></i> </a>
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
              <form class="form-horizontal form-label-left">
                <div class="form-group">
                  <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer nombre: </label>
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span> Checked
                    </label>
                  </div>

                </div>

              </form>
            </div>
          </div>
        </div>
      </div> {{-- CIERRE ROW DATOS PERSENTADOS --}}
    </div> {{-- CIERRE ROW DONDE ESTA EL ALUMNO Y LOS DOCUMENTOS PRESENTADOS --}}


    {{--  DATOS DEL PADRE  --}}
    <div class="col-md-6 col-xs-12">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Datos del padre </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class=""><i class=""></i> </a>
                <li><a class=""><i class=""></i> </a>
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
            	<form class="form-horizontal form-label-left">
            	  <div class="form-group">
            	    <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer nombre: </label>
            	    <div class="col-md-9 col-sm-9 col-xs-12">
            	      <input type="text" name="nombrePadre" class="form-control" placeholder="Primer nombre">
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
            	    <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
            	    	Fecha nacimiento:
            	    </label>
            	    <div class="col-md-9 col-ksm-9 col-xs-12">
            	      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="dd/mm/yyyy">
            	    </div>
            	  </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Ocupación:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Dirección trabajo:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Teléfono:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Teléfono 2:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>
          	  </form>
    				</div>
          </div>
        </div>

        {{-- INFORMACION DE LA MADRE  --}}
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Datos de la madre </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class=""><i class=""></i> </a>
                <li><a class=""><i class=""></i> </a>
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
            	<form class="form-horizontal form-label-left">
            	  <div class="form-group">
            	    <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer nombre: </label>
            	    <div class="col-md-9 col-sm-9 col-xs-12">
            	      <input type="text" name="nombrePadre" class="form-control" placeholder="Primer nombre">
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
            	    <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
            	    	Fecha nacimiento:
            	    </label>
            	    <div class="col-md-9 col-ksm-9 col-xs-12">
            	      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="dd/mm/yyyy">
            	    </div>
            	  </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Ocupación:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Dirección trabajo:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Teléfono:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                    Teléfono 2:
                  </label>
                  <div class="col-md-9 col-ksm-9 col-xs-12">
                    <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
                  </div>
                </div>
          	  </form>
    				</div>
          </div>
        </div>
      </div>
    </div>

  </div>



  {{--
  <div class="row">

    <div class="col-md-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Datos del padre </h2>
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
        	      <input type="text" name="nombrePadre" class="form-control" placeholder="Primer nombre">
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
        	    <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
        	    	Fecha nacimiento:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="dd/mm/yyyy">
        	    </div>
        	  </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Ocupación:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Dirección trabajo:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Teléfono:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Teléfono 2:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>
      	  </form>
				</div>
      </div>
    </div>









    <div class="col-md-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Datos de la madre </h2>
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
        	      <input type="text" name="nombrePadre" class="form-control" placeholder="Primer nombre">
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
        	    <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
        	    	Fecha nacimiento:
        	    </label>
        	    <div class="col-md-9 col-ksm-9 col-xs-12">
        	      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="dd/mm/yyyy">
        	    </div>
        	  </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Ocupación:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Dirección trabajo:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Teléfono:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>

            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">
                Teléfono 2:
              </label>
              <div class="col-md-9 col-ksm-9 col-xs-12">
                <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar nacimiento">
              </div>
            </div>
      	  </form
				</div>
      </div>
    </div>
  </div> --}}

{{--
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> Datos del alumno alumno </h2>
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
  </div> --}}

@endsection
