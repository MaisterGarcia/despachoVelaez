@extends('sistema.app')

@section('body')
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Archivo
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Archivo</h3>
					<form action ="{{route('guardaTipoArchivo')}}" method = 'POST' align="center">
						{{csrf_field()}}

						@if($errors->first('idTipoArchivo'))
						<i> {{ $errors->first('idTipoArchivo') }} </i> 
						@endif	<br>

						Clave Tipo Documento: <input type = 'text' name = 'idTipoArchivo' value="{{$idTipArch}}" readonly = 'readonly' class="form-control">
						<br><br>
						@if($errors->first('NomArchivo')) 
						<i> {{ $errors->first('NomArchivo') }} </i> 
						@endif	<br>
						Descripción del Tipo de Documento: <input type = 'text' name = 'NomArchivo' value="{{old('NomArchivo')}}" class="form-control" placeholder="Intruduce letras empezando la primera con mayúscula">
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