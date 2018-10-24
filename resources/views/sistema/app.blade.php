<!DOCTYPE html>
<html>
<head>
	<title>Despacho Velazquez</title>

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	<div id="app">
		<header>
			<h3>Despacho Velazquez</h3>

			<div style="display: flex; align-items: center;">
				<nav style="margin-right: 20px;">
					<a href="">Abogados |</a>
					<a href="">Clientes |</a>
					<a href="">Juicio |</a>
					<a href="">Tareas |</a>
					<a href="">Juzgados |</a>
				</nav>
				<form>
					<input type="" class="form-control"  name="" placeholder="Buscar">
				</form>
			</div>
		</header>
		<aside>
			<a href="{{route('altaTipoJuicio')}}">| Tipo de Juicio</a>
			<a href="{{route('altaTarea')}}">| Tareas</a>
			<a href="{{route('altaTipoJuzgado')}}">| Tipo de Juzgado</a>
			<a href="{{route('altaTipoArchivo')}}">| Tipo de Archivo</a>
			<a href="{{route('altaTipoAbogado')}}">| Tipo de Abogado</a>
		</aside>
		<div id="body">@yield("body")</div>
	</div>

	<script type="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="{{asset('js/main.js')}}"></script>
</body>
</html>