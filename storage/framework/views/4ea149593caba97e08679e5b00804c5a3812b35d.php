<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
<h1 align="center">Reporte clientes</h1>

<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><th class="col">Clave</th ><th class="col">Nombre</th ><th class="col">Paterno</th ><th class="col">Materno</th ><th class="col">edad</th ><th class="col">sexo</th ><th class="col">email</th ><th class="col">telefono</th ><th class="col">EstadoCivil</th ><th class="col">Operaciones</th ></tr>
	<?php foreach($clientes as $cl): ?>
	<tr><th class="row" align="center"> <?php echo e($cl->id_cte); ?> </th >
		<td ><?php echo e($cl->NomCliente); ?></td>
		<td><?php echo e($cl->AppCliente); ?></td>
		<td><?php echo e($cl->ApmCliente); ?></td>
		<td><?php echo e($cl->edad); ?></td>
		<td><?php echo e($cl->sexo); ?></td>
		<td><?php echo e($cl->email); ?></td>
		<td><?php echo e($cl->Telefono); ?></td>
		<td><?php echo e($cl->EstadoCivilCte); ?></td>
		<td>
			<?php if($cl->deleted_at==""): ?>
			
			<a href="<?php echo e(URL::action('Cabogados@eliminacliente', ['id_cte'=>$cl->id_cte])); ?>" class="icon-trash"></a>
			<a href="<?php echo e(URL::action('Cabogados@modificacliente', ['id_cte'=>$cl->id_cte])); ?>" class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('Cabogados@restarurarcliente', ['id_cte'=>$cl->id_cte])); ?>" class="icon-arrow-sync-outline"></a>
			<?php endif; ?>
		</td></tr>
		<?php endforeach; ?>
	</table>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection("footer"); ?>
	<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>