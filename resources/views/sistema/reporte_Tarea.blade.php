<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tareas Realizadas o a Realizar</title>
</head>
<body>
	<h1 align="center">Tareas a Realizar o realizadas en el Despacho Velazquez</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Abogado a Realizar</td><td>Estado de la Tarea</td><td>Operaciones</td>	
		</tr>
		@foreach($Tareas as $ta)
			<tr><td>{{$ta->id_Tarea}}</td><td>{{$ta->NomAbogado}}</td><td>{{$ta->EstadoTarea}}</td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>