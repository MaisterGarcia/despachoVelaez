<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?>
	<h1 align="center">Tareas a Realizar o realizadas en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Nombre de la Tarea</th><th scope="col">Fecha Limite</th><th scope="col">Fecha de Finalización</th><th scope="col">Abogado a Realizar</th><th scope="col">Estado de la Tarea</th><th scope="col">Operaciones</th>	
		</tr>
		<?php foreach($Tareas as $ta): ?>
			<tr><th scope="row"><?php echo e($ta->id_Tarea); ?></th><td><?php echo e($ta->NomTarea); ?></td><td><?php echo e($ta->FechaLimite); ?></td><td><?php echo e($ta->FechaFin); ?></td><td><?php echo e($ta->NomAbogado); ?></td><td><?php echo e($ta->EstadoTarea); ?></td>
			<td><?php if($ta->deleted_at==""): ?>
		
			<a href="<?php echo e(URL::action('controlador_Tareas@eliminatarea', 
			['id_Tarea'=>$ta->id_Tarea])); ?>" class="icon-trash"></a>
			<a href="<?php echo e(URL::action('controlador_Tareas@modificamTarea', 
			['id_Tarea'=>$ta->id_Tarea])); ?>"class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('controlador_Tareas@restarurartarea',['id_Tarea'=>$ta->id_Tarea])); ?>" class="icon-arrow-sync-outline"></a>
			<?php endif; ?>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>