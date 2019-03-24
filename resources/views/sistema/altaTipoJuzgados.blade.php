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
				<h3 class="card-title">Regitsrar Tipo de Juzgado</h3>
				<form action ="{{route('guardaTipoJuzgado')}}" method = 'POST' align="center">
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
							@if($errors->first('id_TipoJuzgado'))
							<i> {{ $errors->first('id_TipoJuzgado') }} </i> 
							@endif
							Clave Tipo Abogado: <input type = 'text' name = 'id_TipoJuzgado' value="{{$idTipJuz}}" readonly = 'readonly' class="form-control">
							</div>
							@if($errors->first('TipoJuzgado')) 
							<i> {{ $errors->first('TipoJuzgado') }} </i> 
							@endif
							<div class="form-group col-6">
							Descripción del Tipo: <input type = 'text' name = 'TipoJuzgado' value="{{old('TipoJuzgado')}}" placeholder="Lugar 4 mayusculas - numeros o palabras" title="Lugar 4 mayusculas - numeros y/o palabras" class="form-control">
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