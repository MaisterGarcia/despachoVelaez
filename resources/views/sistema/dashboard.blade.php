@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 
@section("body")
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="alert alert-success" role="alert">
			<b><h3>Bienvendo al Sistema del Despacho Velaez.</h3></b>
			<h5>Estamos listos para el regisro de su juicio</h5>
		</div>
	</div>	
</div>
<div>
	<div class="col-xs-12 col-md-12">
		<div class="icon-user-add-outline" style="background: #eee; font-size: 25px; border-radius: 5px "> Movimientos Activos</div>
	</div>
</div>

<div class="col-12"></div>
<div class="row">
	<div class="col-xs-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<b>Abogados</b>
				 
			</div>
			<div class="card-body" style="font-size: 15px">
				@foreach($abogados as $ab)
				Abogados Registrados: <b>{{$ab->abogados}}</b>
				@endforeach
				@if(Session::get('sesiontipo')=="admin")
				<button class="btn btn-success btn-sm btn-fixed"><a href="{{route('altaabogado')}}">Guardar</a></button>
				@endif
			</div>
		</div>	
	</div>

	<div class="col-xs-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<b>Juicios</b>
				 
			</div>
			<div class="card-body" style="font-size: 15px">
				@foreach($juicios as $jui)
				Juicios Registrados: <b>{{$jui->juicios}}</b>
				@endforeach
				@if(Session::get('sesiontipo')=="admin")
				<button class="btn btn-success btn-sm btn-fixed"><a href="{{route('altajuicio')}}">Guardar</a></button>
				@endif
			</div>
		</div>		
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<b>Clientes</b> 
			</div>
			<div class="card-body" style="font-size: 15px">
				@foreach($clientes as $cli)
				Clientes Registrados: <b>{{$cli->clientes}}</b>
				@endforeach
				@if(Session::get('sesiontipo')=="admin")
				<button class="btn btn-success btn-sm btn-fixed"><a href="{{route('altaclientes')}}">Guardar</a></button>
				@endif
			</div>
		</div>	
	</div>

	<div class="col-xs-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<b>Juzgados</b>
				 
			</div>
			<div class="card-body" style="font-size: 15px">
				@foreach($juzgados as $juz)
				Juzgados Existentes: <b>{{$juz->juzgados}}</b>
				@endforeach
				@if(Session::get('sesiontipo')=="admin")
				<button class="btn btn-success btn-sm btn-fixed"><a href="{{route('altajuzgados')}}">Guardar</a></button>
				@endif
			</div>
		</div>	
	</div>
</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 