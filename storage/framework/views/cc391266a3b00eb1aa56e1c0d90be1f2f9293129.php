<?php $__env->startSection('body'); ?>
<h1 align="center">Reporte Juicio</h1>
<br>
<table border="1" align="center" class="table table-dark table-hover">
	<tr><td scope="col">Clave</td><td scope="col">Demandante</td><td scope="col">Tipo Juicio</td><td scope="col">Fecha Demanda</td><td scope="col">Fecha Auditoria</td><td scope="col">Cliente</td><td scope="col">Folio</td><td scope="col">Id Archivo</td><td scope="col">Folio Juzgado</td><td scope="col">Operaciones</td></tr>
	<?php foreach($juicio as $jui): ?>
		<tr><td scope="col"> <?php echo e($jui->num_juicio); ?> </td>
		<td><?php echo e($jui->NomDemandante); ?></td>
		<td><?php echo e($jui->id_TipoJuicio); ?></td>
		<td><?php echo e($jui->FechaDemanda); ?></td>
		<td><?php echo e($jui->FechaAuditoria); ?></td>
		<td><?php echo e($jui->id_cte); ?></td>
		<td><?php echo e($jui->num_folio); ?></td>
		<td><?php echo e($jui->id_Archivo); ?></td>
		<td><?php echo e($jui->FolioJuzgado); ?></td>
		<td><a href="">Eliminar</a>
			<a href="">Modificar</a></td></tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>