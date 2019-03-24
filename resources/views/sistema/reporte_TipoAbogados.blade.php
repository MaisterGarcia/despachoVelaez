@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
	<h1 align="center">Tipos de Abogados en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Abogado</th><th scope="col">Operaciones</th>
		</tr>
		@foreach($TipAb as $ab)
			<tr><th scope="row">{{$ab->IdTipoAbogado}}</th>
			<td>{{$ab->TipoAbogado}}</td>
			<td>
				@if($ab->deleted_at=="") 
		
			<a href="{{URL::action('controlador_abogados@eliminatipoabogado', ['IdTipoAbogado'=>$ab->IdTipoAbogado])}}" class="icon-trash"></a>
			<a href="{{URL::action('controlador_abogados@modificamTA', ['IdTipoAbogado'=>$ab->IdTipoAbogado])}}"class="icon-pencil"></a>
			@else
			<a href="{{URL::action('controlador_abogados@restarurarTipoA', ['IdTipoAbogado'=>$ab->IdTipoAbogado])}}" class="icon-arrow-sync-outline"></a>
			@endif

			</td></tr>
		@endforeach
	</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 