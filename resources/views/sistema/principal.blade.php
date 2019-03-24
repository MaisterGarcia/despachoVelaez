@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<style type="text/css">


h1 {
	text-align: center;
	color: black;
	font-weight: normal;
	font-size: 65px;
	font-family: Arial;
	text-transform: uppercase;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translateX(-50%) translateY(-50%);
}


</style>

<center>
	<h1 class="">
		BIENVENIDO
	</h1>
	
</center>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 