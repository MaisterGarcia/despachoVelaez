<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
	<h1 align="center">Tipos de Juicios en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Juicio</th><th scope="col">Operaciones</th>	
		</tr>
		<?php foreach($TipJui as $tj): ?>
			<tr><th scope="row"><?php echo e($tj->id_TipoJuicio); ?></th><td><?php echo e($tj->NomTipoJuicio); ?></td>
			<td>
			<?php if($tj->deleted_at==""): ?>
			<a href="<?php echo e(URL::action('controlador_TipoJuicio@eliminaTipJui', ['id_TipoJuicio'=>$tj->id_TipoJuicio])); ?>" class="icon-trash"></a>
			<a href="<?php echo e(URL::action('controlador_TipoJuicio@modificaTipJui', ['id_TipoJuicio'=>$tj->id_TipoJuicio])); ?>"class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('controlador_TipoJuicio@restaurarTipJui', ['id_TipoJuicio'=>$tj->id_TipoJuicio])); ?>" class="icon-arrow-sync-outline"></a>
			<?php endif; ?>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>