<!DOCTYPE html>
<html>
<head>
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
		
		@yield("footer")
	</div>

	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>