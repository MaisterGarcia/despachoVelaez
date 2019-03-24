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
				Clientes
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Clientes</h3>
				<form role="form" action="<?php echo e(route('guardaclientes')); ?>" method="POST" class="text-center" enctype="multipart/form-data"> 
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								<?php if($errors->first('id_cte')): ?>
								<i> <?php echo e($errors->first('id_cte')); ?> </i>
								<?php endif; ?>
								Folio:
								<input type="text" placeholder="Folio..." name="id_cte" value="<?php echo e($id_ctes); ?>" readonly='readonly' class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('NomCliente')): ?>
								<i> <?php echo e($errors->first('NomCliente')); ?> </i>
								<?php endif; ?> 
								Nombre:
								<input type="text" placeholder="Nombre..." name="NomCliente" value="<?php echo e(old('NomCliente')); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
							<?php if($errors->first('AppCliente')): ?>
							<i> <?php echo e($errors->first('AppCliente')); ?> </i>
							<?php endif; ?>
								Apellido Paterno:
								<input type="text" placeholder="Apellido Paterno..." name="AppCliente" value="<?php echo e(old('AppCliente')); ?>" class="form-control">
							</div>
							<div class="form-group col-6"> 
							<?php if($errors->first('ApmCliente')): ?>
							<i> <?php echo e($errors->first('ApmCliente')); ?> </i>
							<?php endif; ?>
								Apellido Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmCliente" value="<?php echo e(old('ApmCliente')); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
							<?php if($errors->first('edad')): ?>
							<i> <?php echo e($errors->first('edad')); ?> </i>
							<?php endif; ?>
								Edad :
								<input type="text" placeholder=" Edad..." name="edad" value="<?php echo e(old('edad')); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								Sexo:<br>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="H" checked>Hombre
								</label>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M">Mujer
								</label> 
							</div>
							<div class="form-group col-6">
							<?php if($errors->first('email')): ?>
							<i> <?php echo e($errors->first('email')); ?> </i>
							<?php endif; ?>
								Correo:
								<input type="text" placeholder="Correo.." name="email" value="<?php echo e(old('email')); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
							<?php if($errors->first('telefono')): ?>
							<i> <?php echo e($errors->first('telefono')); ?> </i>
							<?php endif; ?>
								Telefono:
								<input type="text" placeholder="Telefono.." name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
							<?php if($errors->first('EstadoCivilCte')): ?>
							<i> <?php echo e($errors->first('EstadoCivilCte')); ?> </i>
							<?php endif; ?>
								Estado Civil:
								<input type="text" placeholder="Estado EstadoCivil.." name="EstadoCivilCte" value="<?php echo e(old('EstadoCivilCte')); ?>" class="form-control"><br>
							</div>

							<div class="form-group col-6">
								Selecciona estado:
								<select name="id_est" class="form-control">
									<?php foreach($estados as $cr): ?>
									<option value= '<?php echo e($cr->id_est); ?>'> <?php echo e($cr->NomEstado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona Municipio:
								<select name="id_mun" class="form-control">
									<?php foreach($municipios as $mun): ?>
									<option value= '<?php echo e($mun->id_mun); ?>'><?php echo e($mun->NomMunicipio); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona Abogado:
								<select name="num_folio" class="form-control">
									<?php foreach($abogados as $tipabo): ?>
									<option value= '<?php echo e($tipabo->num_folio); ?>'><?php echo e($tipabo->NomAbogado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								<label for="num_folio">Selecciona Tipo Archivo: </label>
								<select name="id_TipoArchivo" class="form-control">
									<?php foreach($tipo_archivos as $tiparch): ?>
									<option value= '<?php echo e($tiparch->id_TipoArchivo); ?>'><?php echo e($tiparch->NomArchivo); ?> 
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>