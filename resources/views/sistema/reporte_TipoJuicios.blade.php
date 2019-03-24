@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
	<h1 align="center">Tipos de Juicios en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Juicio</th><th scope="col">Operaciones</th>	
		</tr>
		@foreach($TipJui as $tj)
			<tr><th scope="row">{{$tj->id_TipoJuicio}}</th><td>{{$tj->NomTipoJuicio}}</td>
			<td>
			@if($tj->deleted_at=="")
			<a href="{{URL::action('controlador_TipoJuicio@eliminaTipJui', ['id_TipoJuicio'=>$tj->id_TipoJuicio])}}" class="icon-trash"></a>
			<a href="{{URL::action('controlador_TipoJuicio@modificaTipJui', ['id_TipoJuicio'=>$tj->id_TipoJuicio])}}"class="icon-pencil"></a>
			@else
			<a href="{{URL::action('controlador_TipoJuicio@restaurarTipJui', ['id_TipoJuicio'=>$tj->id_TipoJuicio])}}" class="icon-arrow-sync-outline"></a>
			@endif
			</td></tr>
		@endforeach
	</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 