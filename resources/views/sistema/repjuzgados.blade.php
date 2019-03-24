@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
<h1 align="center">Reporte Juzgados</h1>
<br>
<table border="1" align="center" class="table table-dark table-hover">
	<tr><td scope="col">Clave</td><td scope="col">Pais</td><td scope="col">Numero de Juzgado</td><td scope="col">Tipo Juzgado</td><td scope="col">Localizacion</td><td scope="col">Operaciones</td></tr>
	@foreach($juzgados as $jz)
		<tr><td scope="col"> {{$jz->FolioJuzgado}} </td>
		<td>{{$jz->Pais}}</td>
		<td>{{$jz->No_Juzgado}}</td>
		<td>{{$jz->TipoJuzgado}}</td>
		<td>{{$jz->Localizacion}}</td>
		<td>
			@if($jz->deleted_at=="")
		
			<a href="{{URL::action('Cabogados@eliminajuzgado', ['FolioJuzgado'=>$jz->FolioJuzgado])}}" class="icon-trash"></a>
			<a href="{{URL::action('Cabogados@modificajuzgado', ['FolioJuzgado'=>$jz->FolioJuzgado])}}"class="icon-pencil"></a>
			@else
			<a href="{{URL::action('Cabogados@restarurarjuzgado', ['FolioJuzgado'=>$jz->FolioJuzgado])}}" class="icon-arrow-sync-outline"></a>
			@endif
		</td></tr>
	@endforeach
</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 



