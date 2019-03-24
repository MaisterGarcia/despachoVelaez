<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
<h1 align="center">Reporte Juicio</h1>
<br>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><td scope="col">Clave</td><td scope="col">Demandante</td><td scope="col">Tipo Juicio</td><td scope="col">Fecha Demanda</td><td scope="col">Fecha Auditoria</td><td scope="col">Cliente</td><td scope="col">Abogado</td><td scope="col">Folio Juzgado</td><td scope="col">Archivo Asignado</td><td scope="col">Operaciones</td></tr>
	<?php foreach($juicio as $jui): ?>
		<tr><td scope="col"> <?php echo e($jui->num_juicio); ?> </td>
		<td><?php echo e($jui->NomDemandante); ?></td>
		<td><?php echo e($jui->NomTipoJuicio); ?></td>
		<td><?php echo e($jui->FechaDemanda); ?></td>
		<td><?php echo e($jui->FechaAuditoria); ?></td>
		<td><?php echo e($jui->NomCliente.' '.$jui->AppCliente.' '.$jui->ApmCliente); ?></td>
	    <td><?php echo e($jui->NomAbogado.' '.$jui->AppAbogado.' '.$jui->ApmAbogado); ?></td>
	    <td><?php echo e($jui->FolioJuzgado); ?></td>
	    <td><?php echo e($jui->archivo); ?></td>
		<td>
			<?php if($jui->deleted_at==""): ?>
			<a href="<?php echo e(URL::action('Cabogados@eliminajuicio', ['num_juicio'=>$jui->num_juicio])); ?>"  class="icon-trash"></a>
			<a href="<?php echo e(URL::action('Cabogados@modificajuicio', ['num_juicio'=>$jui->num_juicio])); ?>" class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('Cabogados@restarurarjuicio', ['num_juicio'=>$jui->num_juicio])); ?>" class="icon-arrow-sync-outline"></a>
			<?php endif; ?>
		</td></tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>