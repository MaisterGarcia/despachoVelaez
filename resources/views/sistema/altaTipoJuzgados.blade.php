@extends('sistema.app')

@section('body')
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

						@if($errors->first('id_TipoJuzgado'))
						<i> {{ $errors->first('id_TipoJuzgado') }} </i> 
						@endif	<br>

						Clave Tipo Abogado: <input type = 'text' name = 'id_TipoJuzgado' value="{{$idTipJuz}}" readonly = 'readonly' class="form-control">
						<br><br>
						@if($errors->first('TipoJuzgado')) 
						<i> {{ $errors->first('TipoJuzgado') }} </i> 
						@endif	<br>
						Descripción del Tipo: <input type = 'text' name = 'TipoJuzgado' value="{{old('TipoJuzgado')}}" placeholder="Lugar 4 mayusculas - numeros o palabras" title="Lugar 4 mayusculas - numeros y/o palabras" class="form-control">
						<br>
						<br>
						<input type = 'submit' value = 'Guardar' class="btn btn-success">
						<input type = 'reset' value = 'Cancelar' class="btn btn-warning">
					</form>
				</div>
			</div>
		</div>
	</div>
@stop