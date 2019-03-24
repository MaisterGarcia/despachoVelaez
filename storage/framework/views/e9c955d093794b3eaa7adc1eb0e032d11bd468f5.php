<?php $__env->startSection('body'); ?>
	<h1 align="center">Tareas a Realizar o realizadas en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Nombre de la Tarea</th><th scope="col">Fecha Limite</th><th scope="col">Fecha de Finalización</th><th scope="col">Abogado a Realizar</th><th scope="col">Estado de la Tarea</th><th scope="col">Operaciones</th>	
		</tr>
		<?php foreach($Tareas as $ta): ?>
			<tr><th scope="row"><?php echo e($ta->id_Tarea); ?></th><td><?php echo e($ta->NomTarea); ?></td><td><?php echo e($ta->FechaLimite); ?></td><td><?php echo e($ta->FechaFin); ?></td><td><?php echo e($ta->NomAbogado); ?></td><td><?php echo e($ta->EstadoTarea); ?></td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>