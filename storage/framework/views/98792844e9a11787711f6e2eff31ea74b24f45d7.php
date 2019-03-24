<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?>
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
				<?php foreach($abogados as $ab): ?>
				Abogados Registrados: <b><?php echo e($ab->abogados); ?></b>
				<?php endforeach; ?>
				<?php if(Session::get('sesiontipo')=="admin"): ?>
				<button class="btn btn-success btn-sm btn-fixed"><a href="<?php echo e(route('altaabogado')); ?>">Guardar</a></button>
				<?php endif; ?>
			</div>
		</div>	
	</div>

	<div class="col-xs-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<b>Juicios</b>
				 
			</div>
			<div class="card-body" style="font-size: 15px">
				<?php foreach($juicios as $jui): ?>
				Juicios Registrados: <b><?php echo e($jui->juicios); ?></b>
				<?php endforeach; ?>
				<?php if(Session::get('sesiontipo')=="admin"): ?>
				<button class="btn btn-success btn-sm btn-fixed"><a href="<?php echo e(route('altajuicio')); ?>">Guardar</a></button>
				<?php endif; ?>
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
				<?php foreach($clientes as $cli): ?>
				Clientes Registrados: <b><?php echo e($cli->clientes); ?></b>
				<?php endforeach; ?>
				<?php if(Session::get('sesiontipo')=="admin"): ?>
				<button class="btn btn-success btn-sm btn-fixed"><a href="<?php echo e(route('altaclientes')); ?>">Guardar</a></button>
				<?php endif; ?>
			</div>
		</div>	
	</div>

	<div class="col-xs-6 col-md-6">
		<div class="card">
			<div class="card-header">
				<b>Juzgados</b>
				 
			</div>
			<div class="card-body" style="font-size: 15px">
				<?php foreach($juzgados as $juz): ?>
				Juzgados Existentes: <b><?php echo e($juz->juzgados); ?></b>
				<?php endforeach; ?>
				<?php if(Session::get('sesiontipo')=="admin"): ?>
				<button class="btn btn-success btn-sm btn-fixed"><a href="<?php echo e(route('altajuzgados')); ?>">Guardar</a></button>
				<?php endif; ?>
			</div>
		</div>	
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>