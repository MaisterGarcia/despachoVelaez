<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Archivos</title>
</head>
<body>
	<h1 align="center">Tipos de Archivos usados para los clientes en Despacho Velazquez</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Tipo Archivo</td><td>Operaciones</td>	
		</tr>
		@foreach($TipArc as $tar)
			<tr><td>{{$tar->id_TipoArchivo}}</td><td>{{$tar->NomArchivo}}</td>
			<td><a href="#">Eliminar </a>
				<a href="{{URL::action('controlador_TipoArchivos@modificamTArc',['id_TipoArchivo'=>$tar->id_TipoArchivo])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>