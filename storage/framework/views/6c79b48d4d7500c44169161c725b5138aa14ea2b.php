<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?>
<body>
	<h1 align="center">Tipos de Juzgados en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th ><th scope="col">Tipo Juzgado</th ><th scope="col">Operaciones</th >	
		</tr>
		<?php foreach($TipJuz as $juz): ?>
			<tr><th scope="row"><?php echo e($juz->id_TipoJuzgado); ?></th>
			<td><?php echo e($juz->TipoJuzgado); ?></td>
			<td>
				<?php if($juz->deleted_at==""): ?>
			
			<a href="<?php echo e(URL::action('controlador_TipoJuzgados@eliminatipojuzgado', ['id_TipoJuzgado'=>$juz->id_TipoJuzgado])); ?>" class="icon-trash"></a>
			<a href="<?php echo e(URL::action('controlador_TipoJuzgados@modificatipojuzgado', ['id_TipoJuzgado'=>$juz->id_TipoJuzgado])); ?>"class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('controlador_TipoJuzgados@restarurartipojuzgado', ['id_TipoJuzgado'=>$juz->id_TipoJuzgado])); ?>"  class="icon-arrow-sync-outline"></a>
			<?php endif; ?>


			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>