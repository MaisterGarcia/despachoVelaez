<aside>
	<div class="menu-container">
		<div class="menu">
			<div class="menu-container">
				<span class="title "><i class="icon-user-add-outline"></i>  <?php echo e(Session::get('sesionname')); ?></span>
			</div>
			<div class="menu-container">
				<span class="title "><i class="icon-th-menu"></i> Menú</span>
			</div>
			<?php if(Session::get('sesiontipo')=="admin"): ?>
			<div class="menu-container">
				<span class="title"><i class="icon-anchor"></i> |Abogados</span>
				<div class="menu hide">
					<a href="<?php echo e(route('altaabogado')); ?>" class="option "><i class="icon-group-outline"></i>Alta Abogado</a>
					<a href="<?php echo e(route('altaTipoAbogado')); ?>" class="option "><i class="icon-group-outline"></i>Alta Tipo Abogado</a>
					<a href="<?php echo e(route('reporteTipoAbogados')); ?>" class="option "><i class="icon-eye"></i>Consulta Tipo Abogado</a>
					<a href="<?php echo e(route('reporteabogado')); ?>" class="option "><i class="icon-eye"></i>Abogados</a>
				</div>
			</div>
			<?php endif; ?>
			<div class="menu-container">
				<span class="title"><i class="icon-user-add-outline"></i> | Clientes</span>
				<div class="menu hide">
					<a href="" class="option"><i class="icon-attachment"></i>Achivos del cliente</a>
					<?php if(Session::get('sesiontipo')=="admin"): ?>
					<a href="<?php echo e(route('altaclientes')); ?>" class="option"><i class="icon-pen"></i>Alta cliente</a>
					<a href="<?php echo e(route('reporteclientes')); ?>" class="option"><i class="icon-eye"></i>Consulta cliente</a>
					<?php endif; ?>
				</div>
			</div>
			<?php if(Session::get('sesiontipo')=="admin"): ?>
			<div class="menu-container">
				<span class="title"><i class="icon-anchor"></i>| Juicios</span>
				<div class="menu hide">
					<a href="<?php echo e(route('altaTipoJuicio')); ?>" class="option"><i class="icon-bookmark"></i>Alta Tipo Juicio</a>
					<a href="<?php echo e(route('reporteTipoJuicios')); ?>" class="option"><i class="icon-eye"></i>Consulta Tipo Juicio</a>
					<a href="<?php echo e(route('altajuicio')); ?>" class="option"><i class="icon-anchor"></i>Alta Juicio</a>
					<a href="<?php echo e(route('reportejuicio')); ?>" class="option"><i class="icon-eye"></i>Consulta Juicios</a>	
				</div>
			</div>
			<?php endif; ?>
			<?php if(Session::get('sesiontipo')=="admin"): ?>
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
			<?php endif; ?>
			<?php if(Session::get('sesiontipo')=="admin"): ?>
			<div class="menu-container">
				<span class="title"><i class="icon-pen"></i>| Tareas</span>
				<div class="menu hide">
					<a href="<?php echo e(route('altaTarea')); ?>" class="option"><i class="icon-bookmark"></i> Alta Tarea</a>
					<a href="<?php echo e(route('reporteTarea')); ?>" class="option"><i class="icon-eye"></i> Reporte Tareas</a>
					<!-- <a href="" class="option">Opcion 3</a> -->
				</div>
			</div>	
			<?php endif; ?>
			<a href="<?php echo e(URL::action('accesoc@cerrarsesion')); ?>" class="option "><i class="icon-media-eject"></i>CERRAR SESIÓN</a>														
		</div>
	</div>
</aside>