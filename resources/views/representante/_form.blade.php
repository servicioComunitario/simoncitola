<div class="row">
  {{--  DATOS DEL PADRE --}}
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Datos del representante </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class=""><i class=""></i> </a></li>
          <li><a class=""><i class=""></i> </a></li>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="form-group">
          <label for="nombrePadre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer nombre: </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" name="nombrePadre" class="form-control" placeholder="Primer nombre" value="{{ $padre->nombre or old('nombrePadre') }}" {{ $disabled }}>
            @if ($errors->has('nombrePadre'))
              <span style="color: red;">{{ $errors->first('nombrePadre') }}</span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label for="nombre2Padre" class="control-label col-md-3 col-sm-3 col-xs-12">Segundo nombre: </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" name="nombre2Padre" class="form-control" placeholder="Segundo nombre" value="{{ $padre->nombre2 or old('nombre2Padre') }}" {{ $disabled }}>
            @if ($errors->has('nombre2Padre'))
              <span style="color: red;">{{ $errors->first('nombre2Padre') }}</span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label for="apellidoPadre" class="control-label col-md-3 col-sm-3 col-xs-12">Primer apellido: </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="apellidoPadre" placeholder="Primer apellido" value="{{ $padre->apellido or old('apellidoPadre') }}" {{ $disabled }}>
            @if ($errors->has('apellidoPadre'))
              <span style="color: red;">{{ $errors->first('apellidoPadre') }}</span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <label for="apellido2Padre" class="control-label col-md-3 col-sm-3 col-xs-12">Segundo apellido: </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="apellido2Padre" placeholder="Segundo apellido" value="{{ $padre->apellido2 or old('apellido2Padre') }}" {{ $disabled }}>
            @if ($errors->has('apellido2Padre'))
              <span style="color: red;">{{ $errors->first('apellido2Padre') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="cedulaPadre" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span> Cedula:
          </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="cedulaPadre" placeholder="Cedula" value="{{ $padre->cedula or old('cedulaPadre') }}" {{ $disabled }}>
            @if ($errors->has('cedulaPadre'))
              <span style="color: red;">{{ $errors->first('cedulaPadre') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="fechaNacimientoPadre" class="control-label col-md-3 col-sm-3 col-xs-12"> <span class="required">*</span>
            Fecha nacimiento:
          </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="fechaNacimientoPadre" placeholder="dd/mm/yyyy" value="{{ $padre->fecha_nacimiento or old('fechaNacimientoPadre') }}" {{ $disabled }}>
            @if ($errors->has('fechaNacimientoPadre'))
              <span style="color: red;">{{ $errors->first('fechaNacimientoPadre') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="ocupacionPadre" class="control-label col-md-3 col-sm-3 col-xs-12">
            Ocupación:
          </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="ocupacionPadre" placeholder="Ocupación" value="{{ $padre->ocupacion or old('ocupacionPadre') }}" {{ $disabled }}>
            @if ($errors->has('ocupacionPadre'))
              <span style="color: red;">{{ $errors->first('ocupacionPadre') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="direccionTrabajoPadre" class="control-label col-md-3 col-sm-3 col-xs-12">
            Dirección trabajo:
          </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="direccionTrabajoPadre" placeholder="Direccion del trabajo" value="{{ $padre->direccion_trabajo or old('direccionTrabajoPadre') }}" {{ $disabled }}>
            @if ($errors->has('direccionTrabajoPadre'))
              <span style="color: red;">{{ $errors->first('direccionTrabajoPadre') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="telefonoPadre" class="control-label col-md-3 col-sm-3 col-xs-12">
            Teléfono:
          </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="telefonoPadre" placeholder="Teléfono" value="{{ $padre->telefono or old('telefonoPadre') }}" {{ $disabled }}>
            @if ($errors->has('telefonoPadre'))
              <span style="color: red;">{{ $errors->first('telefonoPadre') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="telefono2Padre" class="control-label col-md-3 col-sm-3 col-xs-12">
            Teléfono 2:
          </label>
          <div class="col-md-9 col-ksm-9 col-xs-12">
            <input type="text" class="form-control" name="telefono2Padre" placeholder="Otro teléfono" value="{{ $padre->telefono2 or old('telefono2Padre') }}" {{ $disabled }}>
            @if ($errors->has('nombre2Padre'))
              <span style="color: red;">{{ $errors->first('telefono2Padre') }}</span>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div> {{-- CIERRE INFORMACIÓN DEL PADRE --}}
</div>