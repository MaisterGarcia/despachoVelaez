@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<h1 align="center">Reporte abogados</h1>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><th class="col">Clave</th ><th class="col">Nombre</td><th class="col">edad</th ><th class="col">sexo</th ><th class="col">email</th ><th class="col">telefono</th ><th class="col">Tipo de Abogado</th ><th class="col">Archivo</th ><th class="col">Operaciones</th ></tr>
	@foreach($abogado as $ab)
		<tr><th class="row col-12"> {{$ab->num_folio}} </th >
		<td>{{$ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado}}</td>
		<td>{{$ab->edad}}</td>
		<td>{{$ab->sexo}}</td>
		<td>{{$ab->email}}</td>
		<td>{{$ab->telefono}}</td>
		<td>{{$ab->TipoAbogado}}</td>
		<td><img src="{{asset('archivo/'.$ab->Archivo)}}" alt="Imagen de Usuario" height="50" width="50"></td>
		<td>
			@if($ab->deleted_at=="")
		
			<a href="{{URL::action('Cabogados@eliminaabogado', ['num_folio'=>$ab->num_folio])}}" class="icon-trash"></a>
			<a href="{{URL::action('Cabogados@modificaabogado', ['num_folio'=>$ab->num_folio])}}" class="icon-pencil"></a>
			@else
			<a href="{{URL::action('Cabogados@restarurarabogado', ['num_folio'=>$ab->num_folio])}}" class="icon-arrow-sync-outline"></a>
			@endif
		</td></tr>
	@endforeach
</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 

