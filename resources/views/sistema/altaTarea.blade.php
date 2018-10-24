@extends('sistema.app')

@section('body')
<div class="row fixed">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tareas
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tarea</h3>
					<form action ="{{route('guardaTarea')}}" method = 'POST' align="center">
						{{csrf_field()}}

						@if($errors->first('id_Tarea'))
						<i> {{ $errors->first('id_Tarea') }} </i> 
						@endif	<br>

						Clave Tarea: <input type = 'text' name = 'id_Tarea' value="{{$idTarea}}" readonly = 'readonly' class="form-control">
						<br>
						@if($errors->first('NomTarea'))
						<i> {{ $errors->first('NomTarea') }} </i> 
						@endif	<br>
						Nombre de Tarea a Realizar: <input type = 'text' name = 'NomTarea' value="{{old('NomTarea')}}" class="form-control"><br><br>
						@if($errors->first('FechaLimite'))
						<i> {{ $errors->first('FechaLimite') }} </i> 
						@endif
						Introduzca Fecha de Limite de Realización de Tarea: <br>
						 <input type = 'text' name = 'FechaLimite' value="{{old('FechaLimite')}}" placeholder="Formato (año-Mes-dia)" class="form-control">
						<br><br> 
						@if($errors->first('FechaFin'))
						<i> {{ $errors->first('FechaFin') }} </i> 
						@endif
						Introduzca Fecha de Finalización de Tarea: <br>
						 <input type = 'text' name = 'FechaFin' value="{{old('FechaFin')}}" placeholder="Formato (año-Mes-dia)" class="form-control">
						<br><br>
						<center><div class="form-group col-md-4">
							<label for="num_folio">Seleccione Abogado a Asignar:</label>
							<select name = 'num_folio' class="form-control">
								@foreach($abogados as $ab)
								<option value = '{{$ab->num_folio}}'>{{$ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado}}</option>
								@endforeach
							</select>
						<br><br>
							<label for="id_EstTar">Seleccione Estado de la Tarea: </label>
							<select name = 'id_EstTar' class="form-control">
								@foreach($estadoTarea as $et)
								<option value = '{{$et->id_EstTar}}'>{{$et->EstadoTarea}}</option>
								@endforeach
							</select>
						</div>
						</center>
						<br><br>
						<input type = 'submit' value = 'Guardar' class="btn btn-success">
						<input type = 'reset' value = 'Cancelar' class="btn btn-warning">
					</form>
				</div>
			</div>
		</div>
	</div>
@stop