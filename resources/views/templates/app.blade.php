<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="{{asset('archivo/icono.ico')}}" width="40px" heigth="40px">
	<title>Despacho Velazquez</title>

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/style.css')}}">


</head>
<body>
	<div id="app">
		<header>
			<h3><span class="icon-globe"></span>Despacho Velazquez</h3>
			<div style="display: flex; align-items: center;">
				@yield("nav")
			</div>
		</header>

		@yield("asside")

		<div id="body">@yield("body")</div>

		<!-- @yield("footer") -->
	</div>

	<!-- Modals -->
	@yield("modals")

	
	
	{{-- <script src='{{asset('js/jquery-3.1.1.min.js')}}' id="JQ" ></script> --}}
	<script src="{{asset('js/bootstrap.min.js')}}" ></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/retraccion_input.js')}}"></script>
	{{-- <script src="{{asset('js/bootstrap-datetimepicker.es.js')}}" id="JES"></script> --}}
	@yield("script")
</body>
</html>