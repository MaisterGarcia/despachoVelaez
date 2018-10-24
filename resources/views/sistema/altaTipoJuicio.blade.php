@extends('sistema.app')

@section('body')
<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Juicio
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Juicio</h3>
					<form action ="{{route('guardaTipoJuicio')}}" method = 'POST' align="center">
						{{csrf_field()}}

						@if($errors->first('id_TipoJuicio'))
						<i> {{ $errors->first('id_TipoJuicio') }} </i> 
						@endif	<br>
						Clave Tipo Juicio: <input type = 'text' name = 'id_TipoJuicio' value="{{$idTipJuic}}" readonly = 'readonly' class="form-control">
						<br><br>
						@if($errors->first('NomTipoJuicio')) 
						<i> {{ $errors->first('NomTipoJuicio') }} </i> 
						@endif	<br>
						Nombre del Juicio: <input type = 'text' name = 'NomTipoJuicio' value="{{old('NomTipoJuicio')}}" class="form-control">
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