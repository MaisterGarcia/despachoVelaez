<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Tareaa</title>
</head>
<body>
	<h1 align="center">Registrar Tarea</h1>
	<form action ="{{route('guardaTarea')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_Tarea'))
		<i> {{ $errors->first('id_Tarea') }} </i> 
		@endif	<br>

		Clave Tarea: <input type = 'text' name = 'id_Tarea' value="{{$idTarea}}" readonly = 'readonly'>
		<br>
		@if($errors->first('NomTarea'))
		<i> {{ $errors->first('NomTarea') }} </i> 
		@endif	<br>
		Nombre de Tarea a Realizar: <input type = 'text' name = 'NomTarea' value="{{old('NomTarea')}}"><br><br>
		@if($errors->first('FechaLimite'))
		<i> {{ $errors->first('FechaLimite') }} </i> 
		@endif
		Introduzca Fecha de Limite de Realización de Tarea: <br>
		 <input type = 'text' name = 'FechaLimite' value="{{old('FechaLimite')}}" placeholder="Formato (año-Mes-dia)">
		<br><br> 
		@if($errors->first('FechaFin'))
		<i> {{ $errors->first('FechaFin') }} </i> 
		@endif
		Introduzca Fecha de Finalización de Tarea: <br>
		 <input type = 'text' name = 'FechaFin' value="{{old('FechaFin')}}" placeholder="Formato (año-Mes-dia)">
		<br><br> 
		Seleccione Abogado a Asignar: <select name = 'num_folio'>
			@foreach($abogados as $ab)
			<option value = '{{$ab->num_folio}}'>{{$ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado}}</option>
			@endforeach
		</select>
		<br><br>
		Seleccione Estado de la Tarea: <select name = 'id_EstTar'>
			@foreach($estadoTarea as $et)
			<option value = '{{$et->id_EstTar}}'>{{$et->EstadoTarea}}</option>
			@endforeach
		</select>
		<br><br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>