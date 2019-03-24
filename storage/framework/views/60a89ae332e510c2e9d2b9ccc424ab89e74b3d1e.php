<?php $__env->startSection('body'); ?>
<h1 align="center">Reporte abogados</h1>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><th class="col">Clave</th ><th class="col">Nombre</td><th class="col">Paterno</th ><th class="col">Materno</th ><th class="col">edad</th ><th class="col">sexo</th ><th class="col">email</th ><th class="col">telefono</th ><th class="col">EstadoCivil</th ><th class="col">activo</th ><th class="col">Operaciones</th ></tr>
	<?php foreach($abogados as $ab): ?>
		<tr><th class="row"> <?php echo e($ab->num_folio); ?> </th >
		<td><?php echo e($ab->NomAbogado); ?></td>
		<td><?php echo e($ab->AppAbogado); ?></td>
		<td><?php echo e($ab->ApmAbogado); ?></td>
		<td><?php echo e($ab->edad); ?></td>
		<td><?php echo e($ab->sexo); ?></td>
		<td><?php echo e($ab->email); ?></td>
		<td><?php echo e($ab->telefono); ?></td>
		<td><?php echo e($ab->EstadoCivil); ?></td>
		<td><?php echo e($ab->activo); ?></td>
		<td><a href="">Eliminar</a>
			<a href="">Modificar</a></td></tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>