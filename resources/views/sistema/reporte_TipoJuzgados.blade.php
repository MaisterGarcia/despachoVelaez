@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<body>
	<h1 align="center">Tipos de Juzgados en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th ><th scope="col">Tipo Juzgado</th ><th scope="col">Operaciones</th >	
		</tr>
		@foreach($TipJuz as $juz)
			<tr><th scope="row">{{$juz->id_TipoJuzgado}}</th>
			<td>{{$juz->TipoJuzgado}}</td>
			<td>
				@if($juz->deleted_at=="")
			
			<a href="{{URL::action('controlador_TipoJuzgados@eliminatipojuzgado', ['id_TipoJuzgado'=>$juz->id_TipoJuzgado])}}" class="icon-trash"></a>
			<a href="{{URL::action('controlador_TipoJuzgados@modificatipojuzgado', ['id_TipoJuzgado'=>$juz->id_TipoJuzgado])}}"class="icon-pencil"></a>
			@else
			<a href="{{URL::action('controlador_TipoJuzgados@restarurartipojuzgado', ['id_TipoJuzgado'=>$juz->id_TipoJuzgado])}}"  class="icon-arrow-sync-outline"></a>
			@endif


			</td></tr>
		@endforeach
	</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 