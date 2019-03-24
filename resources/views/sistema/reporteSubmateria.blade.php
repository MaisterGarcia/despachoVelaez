@extends('sistema.app')

@section('body')
		<h1 align="center">Submaterias a Realizar en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Nombre de Submateria</th><th scope="col">Nombre del Demandante</th><th scope="col">Operaciones</th>
		</tr>
		@foreach($Sub as $sub)
			<tr><th scope="row">{{$sub->id_Submateria}}</th><td>{{$sub->NomSubmateria}}</td><td>{{$sub->NomDemandante}}</td>
			<td><a href="#"><b>Eliminar</b></a>
				<a href="#" ><b>Modificar</b></a>
			</td></tr>
		@endforeach
	</table>
	@stop
