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
				<h3 class="card-title">Modifica Tipo Abogado</h3>
				<form action ="<?php echo e(route('guardaedicionmTA')); ?>" method = 'POST' align="center">
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="col-6">
								<?php if($errors->first('IdTipoAbogado')): ?>
								<i> <?php echo e($errors->first('IdTipoAbogado')); ?> </i> 
								<?php endif; ?>
								Clave Tipo Abogado: <input type = 'text' name = 'IdTipoAbogado' value="<?php echo e($infom->IdTipoAbogado); ?>" readonly = 'readonly'  class="form-control">
							</div>
							<div class="col-6">
								<?php if($errors->first('TipoAbogado')): ?> 
								<i> <?php echo e($errors->first('TipoAbogado')); ?> </i> 
								<?php endif; ?>
								Descripcion del Tipo: <input type = 'text' name = 'TipoAbogado' value="<?php echo e($infom->TipoAbogado); ?>"  class="form-control">
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