@extends('sistema.app')

@section('body')
	<h1 align="center">Tipos de Abogados en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Abogado</th><th scope="col">Operaciones</th>
		</tr>
		@foreach($TipAb as $ab)
			<tr><th scope="row">{{$ab->idTipoAbogado}}</th><td>{{$ab->TipoAbogado}}</td>
			<td><a href="#"><b>Eliminar</b></a>
				<a href="{{URL::action('controlador_abogados@modificamTA',['idTipoAbogado'=>$ab->idTipoAbogado])}}" ><b>Modificar</b></a>
			</td></tr>
		@endforeach
	</table>
@stop