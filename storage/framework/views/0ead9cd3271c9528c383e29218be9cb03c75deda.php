<?php $__env->startSection('body'); ?>
<h1 align="center">Reporte Juzgados</h1>
<br>
<table border="1" align="center" class="table table-dark table-hover">
	<tr><td scope="col">Clave</td><td scope="col">Pais</td><td scope="col">Juzgado</td><td scope="col">Tipo Juzgado</td><td scope="col">Localizacion</td><td scope="col">Operaciones</td></tr>
	<?php foreach($juzgados as $jz): ?>
		<tr><td scope="col"> <?php echo e($jz->FolioJuzgado); ?> </td>
		<td><?php echo e($jz->Pais); ?></td>
		<td><?php echo e($jz->No_Juzgado); ?></td>
		<td><?php echo e($jz->id_TipoJuzgado); ?></td>
		<td><?php echo e($jz->Localizacion); ?></td>
		<td><a href="">Eliminar</a>
			<a href="">Modificar</a></td></tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>