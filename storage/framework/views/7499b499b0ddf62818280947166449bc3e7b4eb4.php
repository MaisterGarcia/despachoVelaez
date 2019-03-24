<?php $__env->startSection('body'); ?>
		<h1 align="center">Submaterias a Realizar en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Nombre de Submateria</th><th scope="col">Nombre del Demandante</th><th scope="col">Operaciones</th>
		</tr>
		<?php foreach($Sub as $sub): ?>
			<tr><th scope="row"><?php echo e($sub->id_Submateria); ?></th><td><?php echo e($sub->NomSubmateria); ?></td><td><?php echo e($sub->NomDemandante); ?></td>
			<td><a href="#"><b>Eliminar</b></a>
				<a href="#" ><b>Modificar</b></a>
			</td></tr>
		<?php endforeach; ?>
	</table>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>