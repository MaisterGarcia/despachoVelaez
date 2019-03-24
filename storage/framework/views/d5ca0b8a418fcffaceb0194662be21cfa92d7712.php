<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
<h1 align="center">Reporte Juzgados</h1>
<br>
<table border="1" align="center" class="table table-dark table-hover">
	<tr><td scope="col">Clave</td><td scope="col">Pais</td><td scope="col">Numero de Juzgado</td><td scope="col">Tipo Juzgado</td><td scope="col">Localizacion</td><td scope="col">Operaciones</td></tr>
	<?php foreach($juzgados as $jz): ?>
		<tr><td scope="col"> <?php echo e($jz->FolioJuzgado); ?> </td>
		<td><?php echo e($jz->Pais); ?></td>
		<td><?php echo e($jz->No_Juzgado); ?></td>
		<td><?php echo e($jz->TipoJuzgado); ?></td>
		<td><?php echo e($jz->Localizacion); ?></td>
		<td>
			<?php if($jz->deleted_at==""): ?>
		
			<a href="<?php echo e(URL::action('Cabogados@eliminajuzgado', ['FolioJuzgado'=>$jz->FolioJuzgado])); ?>" class="icon-trash"></a>
			<a href="<?php echo e(URL::action('Cabogados@modificajuzgado', ['FolioJuzgado'=>$jz->FolioJuzgado])); ?>"class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('Cabogados@restarurarjuzgado', ['FolioJuzgado'=>$jz->FolioJuzgado])); ?>" class="icon-arrow-sync-outline"></a>
			<?php endif; ?>
		</td></tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 




<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>