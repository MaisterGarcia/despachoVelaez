@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
<h1 align="center">Reporte clientes</h1>

<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><th class="col">Clave</th ><th class="col">Nombre</th ><th class="col">Paterno</th ><th class="col">Materno</th ><th class="col">edad</th ><th class="col">sexo</th ><th class="col">email</th ><th class="col">telefono</th ><th class="col">EstadoCivil</th ><th class="col">Operaciones</th ></tr>
	@foreach($clientes as $cl)
	<tr><th class="row" align="center"> {{$cl->id_cte}} </th >
		<td >{{$cl->NomCliente}}</td>
		<td>{{$cl->AppCliente}}</td>
		<td>{{$cl->ApmCliente}}</td>
		<td>{{$cl->edad}}</td>
		<td>{{$cl->sexo}}</td>
		<td>{{$cl->email}}</td>
		<td>{{$cl->Telefono}}</td>
		<td>{{$cl->EstadoCivilCte}}</td>
		<td>
			@if($cl->deleted_at=="")
			
			<a href="{{URL::action('Cabogados@eliminacliente', ['id_cte'=>$cl->id_cte])}}" class="icon-trash"></a>
			<a href="{{URL::action('Cabogados@modificacliente', ['id_cte'=>$cl->id_cte])}}" class="icon-pencil"></a>
			@else
			<a href="{{URL::action('Cabogados@restarurarcliente', ['id_cte'=>$cl->id_cte])}}" class="icon-arrow-sync-outline"></a>
			@endif
		</td></tr>
		@endforeach
	</table>
	@stop

	@section("footer")
	@include("templates.layouts.footer")
	@stop 