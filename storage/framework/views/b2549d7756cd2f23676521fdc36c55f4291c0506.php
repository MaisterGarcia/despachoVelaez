<?php $__env->startSection('body'); ?>
<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tipo de Juzgado
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tipo de Juzgado</h3>
					<form action ="<?php echo e(route('guardaTipoJuzgado')); ?>" method = 'POST' align="center">
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('id_TipoJuzgado')): ?>
						<i> <?php echo e($errors->first('id_TipoJuzgado')); ?> </i> 
						<?php endif; ?>	<br>

						Clave Tipo Abogado: <input type = 'text' name = 'id_TipoJuzgado' value="<?php echo e($idTipJuz); ?>" readonly = 'readonly' class="form-control">
						<br><br>
						<?php if($errors->first('TipoJuzgado')): ?> 
						<i> <?php echo e($errors->first('TipoJuzgado')); ?> </i> 
						<?php endif; ?>	<br>
						Descripción del Tipo: <input type = 'text' name = 'TipoJuzgado' value="<?php echo e(old('TipoJuzgado')); ?>" placeholder="Lugar 4 mayusculas - numeros o palabras" title="Lugar 4 mayusculas - numeros y/o palabras" class="form-control">
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