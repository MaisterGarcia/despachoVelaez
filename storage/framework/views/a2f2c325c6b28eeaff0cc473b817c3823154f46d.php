<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?> 
<link rel="stylesheet" href="css/bootstrap-date.css">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				Clientes
			</div>
			<div class="card-body">
				<h3 class="card-title">Modifica Cliente</h3>
				<form role="form" action="<?php echo e(route('guardaedicioncliente')); ?>" method="POST" class="text-center row" enctype="multipart/form-data"> 
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								<?php if($errors->first('id_cte')): ?>
								<i> <?php echo e($errors->first('id_cte')); ?> </i>
								<?php endif; ?>
								Folio:<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="id_cte" value="<?php echo e($clientes->id_cte); ?>" class="form-control">
							</div>

							<div class="form-group col-6">
								<?php if($errors->first('NomCliente')): ?>
								<i> <?php echo e($errors->first('NomCliente')); ?> </i>
								<?php endif; ?>
								Nombre:<input type="text" placeholder="Nombre..." name="NomCliente" value="<?php echo e($clientes->NomCliente); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('AppCliente')): ?>
								<i> <?php echo e($errors->first('AppCliente')); ?> </i>
								<?php endif; ?> 
								Paterno:<input type="text" placeholder="Apellido Paterno..." name="AppCliente" value="<?php echo e($clientes->AppCliente); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('ApmCliente')): ?>
								<i> <?php echo e($errors->first('ApmCliente')); ?> </i>
								<?php endif; ?> 
								Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmCliente" value="<?php echo e($clientes->ApmCliente); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('edad')): ?>
								<i> <?php echo e($errors->first('edad')); ?> </i>
								<?php endif; ?>
								Edad :
								<input type="text" placeholder=" Edad..." name="edad" value="<?php echo e($clientes->edad); ?>" class="form-control">
							</div>
							<!-- *************SEXO************** -->
							<div class="form-group col-6">
								Sexo:<br>
								<?php if($clientes->sexo=='M'): ?>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M"  checked="">Mujer
								</label>
								<?php else: ?>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M" >Mujer
								</label>
								<?php endif; ?> 
								<?php if($clientes->sexo=='H'): ?>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="H"  checked="">Hombre
								</label>
								<?php else: ?>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="H" >Hombre
								</label>
								<?php endif; ?> 	
							</div>
							<div class="form-group col-6"> 
								<?php if($errors->first('email')): ?>
								<i> <?php echo e($errors->first('email')); ?> </i>
								<?php endif; ?>
								Correo:
								<input type="text" placeholder="Correo.." name="email" value="<?php echo e($clientes->email); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('Telefono')): ?>
								<i> <?php echo e($errors->first('Telefono')); ?> </i>
								<?php endif; ?> 
								Telefono:
								<input type="text" placeholder="Telefono..(10 dígitos)" name="Telefono" value="<?php echo e($clientes->Telefono); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('EstadoCivilCte')): ?>
								<i> <?php echo e($errors->first('EstadoCivilCte')); ?> </i>
								<?php endif; ?> 
								Estado Civil:
								<input type="text" placeholder="Estado Estado Civil..(Soltero o Casado)" name="EstadoCivilCte" value="<?php echo e($clientes->EstadoCivilCte); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								Selecciona estado:
								<select name="id_est" class="form-control" width="30">
									<option value='<?php echo e($id_est); ?>'><?php echo e($estado); ?></option>
									<?php foreach($todas1 as $est): ?>
									<option value= '<?php echo e($est->id_est); ?>'><?php echo e($est->NomEstado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								<label for="id_mun">Selecciona Municipio: </label>
								<select name="id_mun" class="form-control">
									<option value='<?php echo e($id_mun); ?>'><?php echo e($municipio); ?></option>
									<?php foreach($todas2 as $mun): ?>
									<option value= '<?php echo e($mun->id_mun); ?>'><?php echo e($mun->NomMunicipio); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group col-6">
								<label for="num_folio">Selecciona Abogado: </label>
								<select name="num_folio" class="form-control">
									<option value='<?php echo e($num_folio); ?>'><?php echo e($abogado); ?></option>
									<?php foreach($todas3 as $abo): ?>
									<option value= '<?php echo e($abo->num_folio); ?>'><?php echo e($abo->NomAbogado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group col-6">
								<label for="id_TipoArchivo">Selecciona Tipo Archivo: </label>
								<select name="id_TipoArchivo" class="form-control">
									<option value='<?php echo e($id_TipoArchivo); ?>'><?php echo e($tipoarchivo); ?></option>
									<?php foreach($todas4 as $tiparch): ?>
									<option value= '<?php echo e($tiparch->id_TipoArchivo); ?>'><?php echo e($tiparch->NomArchivo); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
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
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>