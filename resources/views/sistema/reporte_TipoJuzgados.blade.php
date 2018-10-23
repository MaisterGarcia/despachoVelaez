<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Juzgados</title>
</head>
<body>
	<h1 align="center">Tipos de Juzgados en el Despacho Velazquez</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Tipo Juzgado</td><td>Operaciones</td>	
		</tr>
		@foreach($TipJuz as $juz)
			<tr><td>{{$juz->id_TipoJuzgado}}</td><td>{{$juz->TipoJuzgado}}</td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>