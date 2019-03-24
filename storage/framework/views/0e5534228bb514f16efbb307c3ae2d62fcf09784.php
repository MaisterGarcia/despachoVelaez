<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="card">
			<div class="card-header">
				Juicios
			</div>
			<div class="card-body">
				<h3 class="card-title">Modifica Tipo de Juicio</h3>
				<form action ="<?php echo e(route('guardaedicionTipJui')); ?>" method = 'POST' align="center">
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								<?php if($errors->first('id_TipoJuicio')): ?>
								<i> <?php echo e($errors->first('id_TipoJuicio')); ?> </i> 
								<?php endif; ?>
								Clave Tipo Juicio: <input type = 'text' name = 'id_TipoJuicio' value="<?php echo e($tipo_juicios->id_TipoJuicio); ?>" readonly = 'readonly' class="form-control">
							</div>
							
							<div class="form-group col-6">
								<?php if($errors->first('NomTipoJuicio')): ?> 
								<i> <?php echo e($errors->first('NomTipoJuicio')); ?> </i> 
								<?php endif; ?>
								Nombre del Juicio: <input type = 'text' name = 'NomTipoJuicio' value="<?php echo e($tipo_juicios->NomTipoJuicio); ?>" class="form-control">
							</div>
						</div>
						<input type = 'submit' value = 'Guardar' class="btn btn-success col-2">
						<input type = 'reset' value = 'Cancelar' class="btn btn-warning col-2">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>