<?php $__env->startSection('body'); ?>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Abogado
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Abogado</h3>
					<form action ="<?php echo e(route('guardaTipoAbogado')); ?>" method = 'POST' align="center">
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('idTipoAbogado')): ?>
						<i> <?php echo e($errors->first('idTipoAbogado')); ?> </i> 
						<?php endif; ?>	<br>

						Clave Tipo Abogado: <input type = 'text' name = 'idTipoAbogado' value="<?php echo e($idTipAbs); ?>" readonly = 'readonly' class="form-control">
						<br><br>
						<?php if($errors->first('TipoAbogado')): ?> 
						<i> <?php echo e($errors->first('TipoAbogado')); ?> </i> 
						<?php endif; ?>	<br>
						Descripción del Tipo: <input type = 'text' name = 'TipoAbogado' value="<?php echo e(old('TipoAbogado')); ?>" class="form-control" placeholder="Intruduce letras empezando la primera con mayúscula">
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