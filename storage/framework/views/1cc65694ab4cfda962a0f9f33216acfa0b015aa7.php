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
					Tipo de Juzgado
				</div>
				<div class="card-body">
					<h3 class="card-title">Modifica Tipo de Juzgado</h3>
					<form action ="<?php echo e(route('guardaediciontipojuzgado')); ?>" method="POST" align="center">
						<?php echo e(csrf_field()); ?>

						<div class="container col-12">
						<div class="row">
						<div class="form-group col-6">
						<?php if($errors->first('id_TipoJuzgado')): ?>
						<i> <?php echo e($errors->first('id_TipoJuzgado')); ?> </i> 
						<?php endif; ?>

						Clave Tipo Abogado: <input type = 'text' name="id_TipoJuzgado" value="<?php echo e($tipo_juzgados->id_TipoJuzgado); ?>" readonly = 'readonly' class="form-control">
						</div>
						<div class="form-group col-6">
						<?php if($errors->first('TipoJuzgado')): ?> 
						<i> <?php echo e($errors->first('TipoJuzgado')); ?> </i> 
						<?php endif; ?>
						Descripción del Tipo: <input type = 'text' name='TipoJuzgado' value="<?php echo e($tipo_juzgados->TipoJuzgado); ?>" placeholder="Lugar 4 mayusculas - numeros o palabras" title="Lugar 4 mayusculas - numeros y/o palabras" class="form-control">
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