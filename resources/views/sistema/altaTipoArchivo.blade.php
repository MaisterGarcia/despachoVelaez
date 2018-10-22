<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Tipo de Documento Legal</title>
</head>
<body>
	<h1 align="center">Registrar Tipo de Archivo</h1>
	<form action ="{{route('guardaTipoArchivo')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('idTipoArchivo'))
		<i> {{ $errors->first('idTipoArchivo') }} </i> 
		@endif	<br>

		Clave Tipo Documento: <input type = 'text' name = 'idTipoArchivo' value="{{$idTipArch}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('NomArchivo')) 
		<i> {{ $errors->first('NomArchivo') }} </i> 
		@endif	<br>
		Descripción del Tipo de Documento: <input type = 'text' name = 'NomArchivo' value="{{old('NomArchivo')}}">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>