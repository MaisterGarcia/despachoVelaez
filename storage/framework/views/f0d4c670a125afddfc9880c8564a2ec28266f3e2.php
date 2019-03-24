<?php $__env->startSection('body'); ?>
<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Juicio
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Juicio</h3>
					<form action ="<?php echo e(route('guardaTipoJuicio')); ?>" method = 'POST' align="center">
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('id_TipoJuicio')): ?>
						<i> <?php echo e($errors->first('id_TipoJuicio')); ?> </i> 
						<?php endif; ?>	<br>
						Clave Tipo Juicio: <input type = 'text' name = 'id_TipoJuicio' value="<?php echo e($idTipJuic); ?>" readonly = 'readonly' class="form-control">
						<br><br>
						<?php if($errors->first('NomTipoJuicio')): ?> 
						<i> <?php echo e($errors->first('NomTipoJuicio')); ?> </i> 
						<?php endif; ?>	<br>
						Nombre del Juicio: <input type = 'text' name = 'NomTipoJuicio' value="<?php echo e(old('NomTipoJuicio')); ?>" class="form-control">
						<br>
						<br>
						<input type = 'submit' value = 'Guardar' class="btn btn-success">
						<input type = 'reset' value = 'Cancelar' class="btn btn-warning">
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>