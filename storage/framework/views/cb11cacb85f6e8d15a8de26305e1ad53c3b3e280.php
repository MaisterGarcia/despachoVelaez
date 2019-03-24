<?php $__env->startSection('body'); ?>
<div class="row fixed">
	<div class="col-xs-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<?php echo e($proceso); ?>

			</div>
				<div class="card-body">
					<div align="center">
						<h1 align="center"><?php echo e($proceso); ?></h1>
						<br>
						<h4 align="center"><b><?php echo e($mensaje); ?></b></h4>
					</div>
				</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>