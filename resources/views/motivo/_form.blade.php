<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="x_panel">
      		<div class="x_title">
        		<h2>Motivo</h2>
        		<ul class="nav navbar-right panel_toolbox">
					<li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        		</ul>
        		<div class="clearfix"></div>
      		</div>
      		<div class="x_content">
        		<br />
        		@if ($motivo->exists)
					<form id="form-motivo" class="form-horizontal form-label-left" action={{ route('motivos.update',  $motivo->id) }} method="POST">
        		    	{{ method_field('PUT') }}
        		@else
        			<form id="form-motivo" class="form-horizontal form-label-left" action={{ route('motivos.store') }} method="POST">
        		@endif
    				{{ csrf_field() }}
    				<div class="form-group">
    					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span></label>
    					<div class="col-md-6 col-sm-6 col-xs-12">
    						<input type="text" name="nombre" class="form-control col-md-7 col-xs-12" placeholder="Nombre del motivo" value="{{ $motivo->nombre or old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
    					</div>
    				</div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripción <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="descripcion" class="form-control col-md-7 col-xs-12" placeholder="Descripción del motivo" style="height: 80px">{{ $motivo->descripcion or old('descripcion') }}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                            @endif
                        </div>
                    </div>
    				<div class="ln_solid"></div>
    				<div class="form-group">
    					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">
    						<a href={{ route('motivos.index') }} class="btn btn-danger">Volver</a>
    						<button class="btn btn-default" type="reset">Limpiar</button>
    						<button class="btn btn-success" type="submit">Guardar</button>
    					</div>
    				</div>
    			</form>
      		</div>
    	</div>
  	</div>
</div>

