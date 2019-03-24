<?php $__env->startSection('body'); ?>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Archivo
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Archivo</h3>
					<form action ="<?php echo e(route('guardaTipoArchivo')); ?>" method = 'POST' align="center">
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('idTipoArchivo')): ?>
						<i> <?php echo e($errors->first('idTipoArchivo')); ?> </i> 
						<?php endif; ?>	<br>

						Clave Tipo Documento: <input type = 'text' name = 'idTipoArchivo' value="<?php echo e($idTipArch); ?>" readonly = 'readonly' class="form-control">
						<br><br>
						<?php if($errors->first('NomArchivo')): ?> 
						<i> <?php echo e($errors->first('NomArchivo')); ?> </i> 
						<?php endif; ?>	<br>
						Descripción del Tipo de Documento: <input type = 'text' name = 'NomArchivo' value="<?php echo e(old('NomArchivo')); ?>" class="form-control" placeholder="Intruduce letras empezando la primera con mayúscula">
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