<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Juicios</title>
</head>
<body>
	<h1 align="center">Tipos de Juicios en el Despacho Velazquez</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Tipo Juicio</td><td>Operaciones</td>	
		</tr>
		@foreach($TipJui as $tj)
			<tr><td>{{$tj->id_TipoJuicio}}</td><td>{{$tj->NomTipoJuicio}}</td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>