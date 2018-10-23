<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Tipo Juzgado</title>
</head>
<body>
	<h1 align="center">Registrar Tipo de Juzgado</h1>
	<form action ="{{route('guardaTipoJuzgado')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_TipoJuzgado'))
		<i> {{ $errors->first('id_TipoJuzgado') }} </i> 
		@endif	<br>

		Clave Tipo Abogado: <input type = 'text' name = 'id_TipoJuzgado' value="{{$idTipJuz}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('TipoJuzgado')) 
		<i> {{ $errors->first('TipoJuzgado') }} </i> 
		@endif	<br>
		Descripción del Tipo: <input type = 'text' name = 'TipoJuzgado' value="{{old('TipoJuzgado')}}" placeholder="Lugar 4 mayusculas - numeros o palabras" title="Lugar 4 mayusculas - numeros y/o palabras">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>