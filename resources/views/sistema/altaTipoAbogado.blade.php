@extends('sistema.app')

@section('body')
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Abogado
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Abogado</h3>
					<form action ="{{route('guardaTipoAbogado')}}" method = 'POST' align="center">
						{{csrf_field()}}

						@if($errors->first('idTipoAbogado'))
						<i> {{ $errors->first('idTipoAbogado') }} </i> 
						@endif	<br>

						Clave Tipo Abogado: <input type = 'text' name = 'idTipoAbogado' value="{{$idTipAbs}}" readonly = 'readonly' class="form-control">
						<br><br>
						@if($errors->first('TipoAbogado')) 
						<i> {{ $errors->first('TipoAbogado') }} </i> 
						@endif	<br>
						Descripción del Tipo: <input type = 'text' name = 'TipoAbogado' value="{{old('TipoAbogado')}}" class="form-control" placeholder="Intruduce letras empezando la primera con mayúscula">
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