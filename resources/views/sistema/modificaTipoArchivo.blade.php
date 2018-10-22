<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Tipo de Documento Legal</title>
</head>
<body>
	<h1 align="center">Modificar Tipo de Archivo</h1>
	<form action ="{{route('guardaedicionmTArc')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('idTipoArchivo'))
		<i> {{ $errors->first('idTipoArchivo') }} </i> 
		@endif	<br>

		Clave Tipo Documento: <input type = 'text' name = 'idTipoArchivo' value="{{$infom->id_TipoArchivo}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('NomArchivo')) 
		<i> {{ $errors->first('NomArchivo') }} </i> 
		@endif	<br>
		Descripción del Tipo de Documento: <input type = 'text' name = 'NomArchivo' value="{{$infom->NomArchivo}}">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>