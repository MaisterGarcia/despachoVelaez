@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 
<style type="text/css">
#miTablaPersonalizada th{
  width: 400px;
  overflow: auto;

}	
table{
  table-layout: fixed;
}
</style>
@section("body")
<h1 align="center">Archivos llevados en Caso</h1>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr id="miTablaPersonalizada"><th>Tipo Archivo</th ><th>Nombre Cliente</td><th>Clave Juicio</th><th>Nombre Juicio</th ><th>Nombre de Archivo</th ><th>Descargar</th >
	@foreach($resultado as $res)
		<tr id="miTablaPersonalizada">
		@if(preg_match('/xlsx/i', $res->archivo))
			<?php $doctip='excel.png'; ?>
		@elseif($res->archivo=="sindocumento")
			<?php $doctip="advertencia.png"; ?>
		@elseif(preg_match('/docx/i', $res->archivo))
			<?php $doctip="word.png"; ?>
		@elseif(preg_match('/pdf/i', $res->archivo))
		 	<?php $doctip="pdf.png"; ?>
		@elseif(preg_match('/pptx/i', $res->archivo))
		 	<?php $doctip="pdf.png"; ?>
		@endif
		<th><img src="{{asset('archivo/'.$doctip)}}" alt="Tipo de Archivo" height="50" width="50"></th >
		<td>{{$res->NomCliente.' '.$res->AppCliente.' '.$res->ApmCliente}}</td>
		<td>{{$res->num_juicio}}</td>
		<td>{{$res->NomTipoJuicio}}</td>
		<td>{{$res->archivo}}</td>
		<td><a href="{{asset('archivo/'.$res->archivo)}}"><b>Descargar</b></a></td>
		</tr>
	@endforeach
</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 

