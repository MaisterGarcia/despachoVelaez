@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Juzgado
				</div>
				<div class="card-body">
					<h3 class="card-title">Modifica Tipo de Juzgado</h3>
					<form action ="{{route('guardaediciontipojuzgado')}}" method="POST" align="center">
						{{csrf_field()}}
						<div class="container col-12">
						<div class="row">
						<div class="form-group col-6">
						@if($errors->first('id_TipoJuzgado'))
						<i> {{ $errors->first('id_TipoJuzgado') }} </i> 
						@endif

						Clave Tipo Abogado: <input type = 'text' name="id_TipoJuzgado" value="{{$tipo_juzgados->id_TipoJuzgado}}" readonly = 'readonly' class="form-control">
						</div>
						<div class="form-group col-6">
						@if($errors->first('TipoJuzgado')) 
						<i> {{ $errors->first('TipoJuzgado') }} </i> 
						@endif
						Descripción del Tipo: <input type = 'text' name='TipoJuzgado' value="{{$tipo_juzgados->TipoJuzgado}}" placeholder="Lugar 4 mayusculas - numeros o palabras" title="Lugar 4 mayusculas - numeros y/o palabras" class="form-control">
					</div>
					</div>
					<input type = 'submit' value = 'Guardar' class="btn btn-success col-2">
					<input type = 'reset' value = 'Cancelar' class="btn btn-warning col-2">
				</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 