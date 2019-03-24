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
		<div class="card" style="background: black color-font:#ffffff">
			<div class="card-header">
				Abogados
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Abogado</h3>
				<form action="<?php echo e(route('guardaedicionabogado')); ?>" method="post" class="text-center row" enctype="multipart/form-data"> 
					<?php echo e(csrf_field()); ?>

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								<?php if($errors->first('num_folio')): ?>
								<i> <?php echo e($errors->first('num_folio')); ?> </i>  
								<?php endif; ?>
								Folio:<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="num_folio" value="<?php echo e($abogados->num_folio); ?>" class="form-control" readonly="">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('NomAbogado')): ?>
								<i> <?php echo e($errors->first('NomAbogado')); ?> </i>
								<?php endif; ?>
								Nombre:<input type="text" placeholder="Nombre..." name="NomAbogado" value="<?php echo e($abogados->NomAbogado); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('AppAbogado')): ?>
								<i> <?php echo e($errors->first('AppAbogado')); ?> </i>
								<?php endif; ?> 
								Paterno:<input type="text" placeholder="Apellido Paterno..." name="AppAbogado" value="<?php echo e($abogados->AppAbogado); ?>" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('ApmAbogado')): ?>
								<i> <?php echo e($errors->first('ApmAbogado')); ?> </i>
								<?php endif; ?> 
								Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmAbogado" value="<?php echo e($abogados->ApmAbogado); ?>" class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('edad')): ?>
								<i> <?php echo e($errors->first('edad')); ?> </i>
								<?php endif; ?>
								<label for="edad">Edad :</label>
								<input type="text" placeholder=" Edad..." name="edad" value="<?php echo e($abogados->edad); ?>" class="form-control">
							</div>
							<!--*********SEXO*******-->
							<div class="form-group col-6">
								Sexo:<br>
								<?php if($abogados->sexo=='M' or $abogados->sexo=='m'): ?>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M"  checked="">Mujer
								</label>
								<?php else: ?>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M" >Mujer
								</label>
								<?php endif; ?> 
								<?php if($abogados->sexo=='H' or $abogados->sexo=='h'): ?>
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
								<input type="text" placeholder="Correo.." name="email" value="<?php echo e($abogados->email); ?>" class="form-control">
							</div>
							<div class="form-group col-6"> 
								<?php if($errors->first('telefono')): ?>
								<i> <?php echo e($errors->first('telefono')); ?> </i>
								<?php endif; ?> 
								Telefono:
								<input type="text" placeholder="Telefono..(10 dígitos)" name="telefono" value="<?php echo e($abogados->telefono); ?>" class="form-control">
							</div>
							<div class="form-group col-6"> 
								<?php if($errors->first('EstadoCivil')): ?>
								<i> <?php echo e($errors->first('EstadoCivil')); ?> </i>
								<?php endif; ?> 
								Estado Civil:
								<input type="text" placeholder="Estado EstadoCivil..(Soltero o Casado)" name="EstadoCivil" value="<?php echo e($abogados->EstadoCivil); ?>" class="form-control">
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
								Selecciona Municipio:
								<select name="id_mun" class="form-control">
									<option value='<?php echo e($id_mun); ?>'><?php echo e($municipio); ?></option>
									<?php foreach($todas2 as $mun): ?>
									<option value= '<?php echo e($mun->id_mun); ?>'><?php echo e($mun->NomMunicipio); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona 	Tipo Abogado:
								<select name="IdTipoAbogado" class="form-control">
									<option value='<?php echo e($IdTipoAbogado); ?>'><?php echo e($tipoabogado); ?></option>
									<?php foreach($todas3 as $tipabo): ?>
									<option value= '<?php echo e($tipabo->IdTipoAbogado); ?>'><?php echo e($tipabo->TipoAbogado); ?> 
									</option>	
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('archivo')): ?>
								<i> <?php echo e($errors->first('archivo')); ?> </i>
								<?php endif; ?> 
								<img src=" <?php echo e(asset('archivo/'.$abogados->Archivo)); ?>" height="140" width="140"> 
							</div>
							<div class="form-group col-6">
								Selecciona foto:<br><br><br> <input type="file" name= "archivo">
							</div>
						</div>
						<input type="submit" value="Guardar" class="btn btn-success col-2" >
						<input type="reset" value="Cancelar" class="btn btn-warning col-2" >
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