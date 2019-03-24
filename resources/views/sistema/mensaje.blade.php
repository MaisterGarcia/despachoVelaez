@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<div class="row fixed">
	<div class="col-xs-12 col-md-12">
		<div class="card">
			<div class="card-header">
				{{$proceso}}
			</div>
				<div class="card-body">
					<div align="center">
						<h1 align="center">{{$proceso}}</h1>
						<br>
						<h4 align="center"><b>{{$mensaje}}</b></h4>
					</div>
				</div>
		</div>
	</div>
</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 