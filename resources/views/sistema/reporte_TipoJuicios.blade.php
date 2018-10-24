@extends('sistema.app')

@section('body')
	<h1 align="center">Tipos de Juicios en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Juicio</th><th scope="col">Operaciones</th>	
		</tr>
		@foreach($TipJui as $tj)
			<tr><th scope="row">{{$tj->id_TipoJuicio}}</th><td>{{$tj->NomTipoJuicio}}</td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		@endforeach
	</table>
@stop