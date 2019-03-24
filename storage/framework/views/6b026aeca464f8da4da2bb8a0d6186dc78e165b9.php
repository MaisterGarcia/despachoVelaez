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
				Juzgados
			</div>
			<div class="card-body">
				<div align="center">
					<h3 class="card-title">Modifica Juzgado</h3>
					<div align="center">
						<form role="form" action="<?php echo e(route('guardaedicionjuzgado')); ?>" method="POST" class="text-center" enctype="multipart/form-data" class="form-control"> 
							<?php echo e(csrf_field()); ?>

							<div class="container col-12">
								<div class="row">
									<div class="form-group col-6">
										<?php if($errors->first('FolioJuzgado')): ?>
										<i> <?php echo e($errors->first('FolioJuzgado')); ?> </i>
										<?php endif; ?>		       
										Folio:
										<input type="text" placeholder="Folio..." name="FolioJuzgado" value="<?php echo e($juzgados->FolioJuzgado); ?>" class="form-control">
									</div>
									<div class="form-group col-6">
										<?php if($errors->first('Pais')): ?>
										<i> <?php echo e($errors->first('Pais')); ?> </i>
										<?php endif; ?>   
										Pais:
										<input type="text" placeholder="Pais..." name="Pais" value="<?php echo e($juzgados->Pais); ?>" class="form-control">
									</div>
									<div class="form-group col-6">
										<?php if($errors->first('No_Juzgado')): ?>
										<i> <?php echo e($errors->first('No_Juzgado')); ?> </i>
										<?php endif; ?>
										Juzgado:
										<input type="text" placeholder="Juzgado..." name="No_Juzgado" value="<?php echo e($juzgados->No_Juzgado); ?>" class="form-control">
									</div>
									<div class="form-group col-6">
										<?php if($errors->first('Localizacion')): ?>
										<i> <?php echo e($errors->first('Localizacion')); ?> </i>
										<?php endif; ?>
										
										Juzgado:
										<input type="text" placeholder="Juzgado..." name="Localizacion" value="<?php echo e($juzgados->Localizacion); ?>" class="form-control">
									</div>
									<div class="form-group col-6">
										Selecciona estado:
										<select name="id_TipoJuzgado" class="form-control">
											<option value='<?php echo e($id_TipoJuzgado); ?>'><?php echo e($juzgado); ?></option>
											<?php foreach($todas as $tipjuz): ?>
											<option value= '<?php echo e($tipjuz->id_TipoJuzgado); ?>'> <?php echo e($tipjuz->TipoJuzgado); ?> 
											</option>	
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<input type="submit" value="Guardar" class="btn btn-success col-2">
								<input type="submit" value="Cancelar" class="btn btn-warning col-2">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection("footer"); ?>
	<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>