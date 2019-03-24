@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
<h1 align="center">Reporte Juicio</h1>
<br>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><td scope="col">Clave</td><td scope="col">Demandante</td><td scope="col">Tipo Juicio</td><td scope="col">Fecha Demanda</td><td scope="col">Fecha Auditoria</td><td scope="col">Cliente</td><td scope="col">Abogado</td><td scope="col">Folio Juzgado</td><td scope="col">Archivo Asignado</td><td scope="col">Operaciones</td></tr>
	@foreach($juicio as $jui)
		<tr><td scope="col"> {{$jui->num_juicio}} </td>
		<td>{{$jui->NomDemandante}}</td>
		<td>{{$jui->NomTipoJuicio}}</td>
		<td>{{$jui->FechaDemanda}}</td>
		<td>{{$jui->FechaAuditoria}}</td>
		<td>{{$jui->NomCliente.' '.$jui->AppCliente.' '.$jui->ApmCliente}}</td>
	    <td>{{$jui->NomAbogado.' '.$jui->AppAbogado.' '.$jui->ApmAbogado}}</td>
	    <td>{{$jui->FolioJuzgado}}</td>
	    <td>{{$jui->archivo}}</td>
		<td>
			@if($jui->deleted_at=="")
			<a href="{{URL::action('Cabogados@eliminajuicio', ['num_juicio'=>$jui->num_juicio])}}"  class="icon-trash"></a>
			<a href="{{URL::action('Cabogados@modificajuicio', ['num_juicio'=>$jui->num_juicio])}}" class="icon-pencil"></a>
			@else
			<a href="{{URL::action('Cabogados@restarurarjuicio', ['num_juicio'=>$jui->num_juicio])}}" class="icon-arrow-sync-outline"></a>
			@endif
		</td></tr>
	@endforeach
</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 
