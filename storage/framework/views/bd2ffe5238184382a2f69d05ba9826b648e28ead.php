<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				Abogados
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Tipo Abogado</h3>
				<form action ="<?php echo e(route('guardaTipoAbogado')); ?>" method = 'POST' align="center">
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="col-6">
								<?php if($errors->first('IdTipoAbogado')): ?>
								<i> <?php echo e($errors->first('IdTipoAbogado')); ?> </i> 
								<?php endif; ?>	<br>

								Clave Tipo Abogado: <input type = 'text' name = 'IdTipoAbogado' value="<?php echo e($idTipAbs); ?>" readonly = 'readonly' class="form-control">
							</div>
							<div class="col-6">
								<?php if($errors->first('TipoAbogado')): ?> 
								<i> <?php echo e($errors->first('TipoAbogado')); ?> </i> 
								<?php endif; ?>	<br>
								Descripción del Tipo: <input type = 'text' name = 'TipoAbogado' value="<?php echo e(old('TipoAbogado')); ?>" class="form-control" placeholder="Intruduce letras empezando la primera con mayúscula">
							</div>
						</div>
							<input type="submit" value="Guardar" class="btn btn-success col-2" >
							<input type="submit" value="Cancelar" class="btn btn-warning col-2" >
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