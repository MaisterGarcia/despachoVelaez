<!DOCTYPE html>
<html>
<head>
	<title>Despacho Velazquez</title>

	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('fonts/style.css')); ?>">
</head>
<body>
	<div id="app">
		<header>
			<h3><span class="icon-globe"></span>Despacho Velazquez</h3>
			<div style="display: flex; align-items: center;">
				<nav style="margin-right: 20px;">
					<a href="" class="icon-home"> Inicio |</a>
					<a href="" class="icon-anchor"> Abogados |</a>
					<a href="" class="icon-user-add-outline"> Clientes |</a>
					<a href="" class="icon-chart-bar"> Juicio |</a>
					<a href="" class="icon-pen"> Tareas |</a>
					<a href="" class="icon-home"> Juzgados |</a>
				</nav>
				<form>
					<input type="" class="form-control icon-globe"  name="buscar" placeholder="Buscar">
				</form>
			</div>
		</header>
		<aside>
			<div class="menu-container">
				<div class="menu">
					<div class="menu-container">
						<span class="title "><i class="icon-th-menu"></i> Menú</span>
					</div>
					<div class="menu-container">
						<span class="title"><i class="icon-anchor"></i> |Abogados</span>
						<div class="menu hide">
							<a href="<?php echo e(route('altaabogado')); ?>" class="option "><i class="icon-group-outline"></i>Alta Abogado</a>
							<a href="<?php echo e(route('altaTipoAbogado')); ?>" class="option "><i class="icon-group-outline"></i>Alta Tipo Abogado</a>
							<a href="<?php echo e(route('reporteTipoAbogados')); ?>" class="option "><i class="icon-eye"></i>Consulta Tipo Abogado</a>
							<a href="<?php echo e(route('reporteabogado')); ?>" class="option "><i class="icon-eye"></i>Abogados</a>
						</div>
					</div>
					<div class="menu-container">
						<span class="title"><i class="icon-user-add-outline"></i> | Clientes</span>
						<div class="menu hide">
							<a href="" class="option"><i class="icon-attachment"></i>Achivos del cliente</a>
							<a href="<?php echo e(route('altaclientes')); ?>" class="option"><i class="icon-pen"></i>Alta cliente</a>
							<a href="<?php echo e(route('reporteclientes')); ?>" class="option"><i class="icon-eye"></i>Consulta cliente</a>
						</div>
					</div>
					<div class="menu-container">
						<span class="title"><i class="icon-anchor"></i>| Juicios</span>
						<div class="menu hide">
							<a href="<?php echo e(route('altaTipoJuicio')); ?>" class="option"><i class="icon-bookmark"></i>Alta Tipo Juicio</a>
							<a href="<?php echo e(route('reporteTipoJuicios')); ?>" class="option"><i class="icon-eye"></i>Consulta Tipo Juicio</a>
							<a href="<?php echo e(route('altajuicio')); ?>" class="option"><i class="icon-anchor"></i>Alta Juicio</a>
							<a href="<?php echo e(route('reportejuicio')); ?>" class="option"><i class="icon-eye"></i>Consulta Juicios</a>	
						</div>
					</div>
					<div class="menu-container">
						<span class="title"><i class="icon-bookmark"></i>| Juzgados</span>
						<div class="menu hide">
							<a href="<?php echo e(route('altaTipoJuzgado')); ?>" class="option"><i class="icon-bookmark"></i> Alta Tipo Juzgado</a>
							<a href="<?php echo e(route('reporteTipoJuzgados')); ?>" class="option"><i class="icon-eye"></i> Reporte Tipo Juzgados</a>
							<a href="<?php echo e(route('altajuzgados')); ?>" class="option"><i class="icon-bookmark"></i> Alta Juzgado</a>
							<a href="<?php echo e(route('reportejuzgados')); ?>" class="option"><i class="icon-eye"></i> Consulta Juzgado</a>
							<!-- <a href="" class="option">Opcion 3</a> -->
						</div>
					</div>
					<div class="menu-container">
						<span class="title"><i class="icon-pen"></i>| Tareas</span>
						<div class="menu hide">
							<a href="<?php echo e(route('altaTarea')); ?>" class="option"><i class="icon-bookmark"></i> Alta Tarea</a>
							<a href="<?php echo e(route('reporteTarea')); ?>" class="option"><i class="icon-eye"></i> Reporte Tareas</a>
							<!-- <a href="" class="option">Opcion 3</a> -->
						</div>
					</div>															
				</div>
			</div>


			<!-- <h3><span class="icon-th-menu"></span> Menu</h3>
			<label for="Tareas"><span class="icon-chevron-right"></span>Tareas</label>
			<a href=""><span class="icon-pen"></span>| Estado de la tarea</a>
			<label for=" Juicio"><span class="icon-chevron-right"></span> Juicio</label>
			<a href=""><span class="icon-bookmark"></span>| Tipo de juicio</a>
			<label for="Abogados"><span class="icon-chevron-right"></span> Juzgado</label>
			<a href=""><span class="icon-book"></span> | Tipo de Juzgado</a>
			<label for="Archivos"><span class="icon-chevron-right"></span> Archivos</label>
			<a href=""><span class=" icon-attachment"></span>| Tipo de Archivo</a>
			<label for="Moneda"><span class="icon-chevron-right"></span> Moneda</label>
			<a href=""><span class=" icon-database"></span>| Tipo de Moneda</a>
			<label for="Abogados"><span class="icon-chevron-right"></span> Abogados Velazquez</label>
			<a href=""><span class="icon-group-outline"></span>| Tipo de Abogado</a> -->
		</aside>
		<div id="body"><?php echo $__env->yieldContent("body"); ?></div>
	</div>

	<script src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>