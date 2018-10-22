<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Abogados</title>
</head>
<body>
	<h1 align="center">Tipos de Abogados en el Despacho Velazquez</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Tipo Abogado</td><td>Operaciones</td>	
		</tr>
		@foreach($TipAb as $ab)
			<tr><td>{{$ab->idTipoAbogado}}</td><td>{{$ab->TipoAbogado}}</td>
			<td><a href="#">Eliminar </a>
				<a href="{{URL::action('controlador_abogados@modificamTA',['idTipoAbogado'=>$ab->idTipoAbogado])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>