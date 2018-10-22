<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Tipo Abogado</title>
</head>
<body>
	<h1 align="center">Modifica Tipo de Abogado</h1>
	<form action ="{{route('guardaedicionmTA')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('idTipoAbogado'))
		<i> {{ $errors->first('idTipoAbogado') }} </i> 
		@endif	<br>

		Clave Tipo Abogado: <input type = 'text' name = 'idTipoAbogado' value="{{$infom->idTipoAbogado}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('TipoAbogado')) 
		<i> {{ $errors->first('TipoAbogado') }} </i> 
		@endif	<br>
		Descripción del Tipo: <input type = 'text' name = 'TipoAbogado' value="{{$infom->TipoAbogado}}">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>