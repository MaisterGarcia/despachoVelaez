<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Archivos</title>
</head>
<body>
	<h1 align="center">Tipos de Archivos usados para los clientes en Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Archivo</th><th scope="col">Operaciones</th>	
		</tr>
		@foreach($TipArc as $tar)
			<tr><th scope="row">{{$tar->id_TipoArchivo}}</th><td>{{$tar->NomArchivo}}</td>
			<td><a href="#">Eliminar </a>
				<a href="{{URL::action('controlador_TipoArchivos@modificamTArc',['id_TipoArchivo'=>$tar->id_TipoArchivo])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>