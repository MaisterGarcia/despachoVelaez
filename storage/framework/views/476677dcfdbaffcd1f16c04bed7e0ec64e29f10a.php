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
				<h3 class="card-title">Alta Abogados</h3>
				<form role="form" action="<?php echo e(route('guardaabogado')); ?>" method="POST" class="text-center row" enctype="multipart/form-data"> 
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								<?php if($errors->first('num_folio')): ?>
								<i> <?php echo e($errors->first('num_folio')); ?> </i>
								<?php endif; ?>
								Folio:<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="num_folio" value="<?php echo e(old('num_folio')); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('NomAbogado')): ?>
								<i> <?php echo e($errors->first('NomAbogado')); ?> </i>
								<?php endif; ?>
								Nombre:<input type="text" placeholder="Nombre..." name="NomAbogado" value="<?php echo e(old('NomAbogado')); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('AppAbogado')): ?>
								<i> <?php echo e($errors->first('AppAbogado')); ?> </i>
								<?php endif; ?> 
								Paterno:<input type="text" placeholder="Apellido Paterno..." name="AppAbogado" value="<?php echo e(old('AppAbogado')); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('ApmAbogado')): ?>
								<i> <?php echo e($errors->first('ApmAbogado')); ?> </i>
								<?php endif; ?> 
								Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmAbogado" value="<?php echo e(old('ApmAbogado')); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('edad')): ?>
								<i> <?php echo e($errors->first('edad')); ?> </i>
								<?php endif; ?>
								Edad :
								<input type="text" placeholder=" Edad..." name="edad" value="<?php echo e(old('edad')); ?>" class="form-control"><br><br>
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
								<input type="text" placeholder="Telefono..(10 dígitos)" name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('EstadoCivil')): ?>
								<i> <?php echo e($errors->first('EstadoCivil')); ?> </i>
								<?php endif; ?> 
								Estado Civil:
								<input type="text" placeholder="Estado EstadoCivil..(Soltero o Casado)" name="EstadoCivil" value="<?php echo e(old('EstadoCivil')); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								Selecciona estado:
								<select name="id_est" class="form-control" width="30">
									<?php foreach($estados as $est): ?>
									<option value= '<?php echo e($est->id_est); ?>'><?php echo e($est->NomEstado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona municipio:
								<select name="id_mun" class="form-control" width="30">
									<?php foreach($municipios as $mun): ?>
									<option value= '<?php echo e($mun->id_mun); ?>'><?php echo e($mun->NomMunicipio); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona 	Tipo Abogado:
								<select name="IdTipoAbogado" class="form-control">
									<?php foreach($tipoAb as $tipabo): ?>
									<option value= '<?php echo e($tipabo->IdTipoAbogado); ?>'><?php echo e($tipabo->TipoAbogado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('archivo')): ?>
								<i> <?php echo e($errors->first('archivo')); ?> </i>
								<?php endif; ?> 
								Selecciona Imagen:<br>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo">
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