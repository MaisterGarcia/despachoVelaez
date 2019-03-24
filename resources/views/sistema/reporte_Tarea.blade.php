@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
	<h1 align="center">Tareas a Realizar o realizadas en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Nombre de la Tarea</th><th scope="col">Fecha Limite</th><th scope="col">Fecha de Finalización</th><th scope="col">Abogado a Realizar</th><th scope="col">Estado de la Tarea</th><th scope="col">Operaciones</th>	
		</tr>
		@foreach($Tareas as $ta)
			<tr><th scope="row">{{$ta->id_Tarea}}</th><td>{{$ta->NomTarea}}</td><td>{{$ta->FechaLimite}}</td><td>{{$ta->FechaFin}}</td><td>{{$ta->NomAbogado}}</td><td>{{$ta->EstadoTarea}}</td>
			<td>@if($ta->deleted_at=="")
		
			<a href="{{URL::action('controlador_Tareas@eliminatarea', 
			['id_Tarea'=>$ta->id_Tarea])}}" class="icon-trash"></a>
			<a href="{{URL::action('controlador_Tareas@modificamTarea', 
			['id_Tarea'=>$ta->id_Tarea])}}"class="icon-pencil"></a>
			@else
			<a href="{{URL::action('controlador_Tareas@restarurartarea',['id_Tarea'=>$ta->id_Tarea])}}" class="icon-arrow-sync-outline"></a>
			@endif
			</td></tr>
		@endforeach
	</table>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 