<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Tipo Juicio</title>
</head>
<body>
	<h1 align="center">Registrar Tipo de Juicio</h1>
	<form action ="{{route('guardaTipoJuicio')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_TipoJuicio'))
		<i> {{ $errors->first('id_TipoJuicio') }} </i> 
		@endif	<br>
		Clave Tipo Juicio: <input type = 'text' name = 'id_TipoJuicio' value="{{$idTipJuic}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('NomTipoJuicio')) 
		<i> {{ $errors->first('NomTipoJuicio') }} </i> 
		@endif	<br>
		Nombre del Juicio: <input type = 'text' name = 'NomTipoJuicio' value="{{old('NomTipoJuicio')}}">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>