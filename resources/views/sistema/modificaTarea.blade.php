<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Tarea</title>
</head>
<body>
	<h1 align="center">Registrar Tarea</h1>
	<form action ="{{route('guardaedicionmTarea')}} method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_Tarea'))
		<i> {{ $errors->first('id_Tarea') }} </i> 
		@endif	<br>

		Clave Tipo Tarea: <input type = 'text' name = 'id_Tarea' value="{{$infom->id_Tarea}}" readonly = 'readonly'>
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
		Fecha: <div id="datepicker" align="center"></div>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>