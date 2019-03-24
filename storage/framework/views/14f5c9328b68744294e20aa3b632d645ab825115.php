<?php $__env->startSection('body'); ?>
		<style type="text/css">

		form {
	    	width: 400px;
	    	height: 
	    	font: normal bold 12px;
		}

		form label {
	    	display: inline-block;
	    	width: 100px;
		}

		form input {
	    	display: inline-block;
	   	 	width: 150px;
	    	margin-bottom: 10px;
		}

		</style> 
		<div class="row fixed">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Clientes
				</div>
				<div class="card-body">
			<div align="center">
				<h3 class="card-title">Alta Clientes</h3>
				<form role="form" action="<?php echo e(route('guardaclientes')); ?>" method="POST" class="text-center" enctype="multipart/form-data"> 
					<?php echo e(csrf_field()); ?>


					<?php if($errors->first('id_cte')): ?>
			        <i> <?php echo e($errors->first('id_cte')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group">
			        	<label for="id_cte">Folio:</label>
					<input type="text" placeholder="Folio..." name="id_cte" value="<?php echo e($id_ctes); ?>" readonly='readonly' class="form-control"><br>
					</div>

					<?php if($errors->first('NomCliente')): ?>
			        <i> <?php echo e($errors->first('NomCliente')); ?> </i>
			        <?php endif; ?> 
			        <div class="form-group">
			        	<label for="NomCliente">Nombre:</label>
					<input type="text" placeholder="Nombre..." name="NomCliente" value="<?php echo e(old('NomCliente')); ?>" class="form-control"><br>
					</div>

					<?php if($errors->first('AppCliente')): ?>
			        <i> <?php echo e($errors->first('AppCliente')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group">
			        	<label for="AppCliente">Edad:</label>
					   <input type="text" placeholder="Apellido Paterno..." name="AppCliente" value="<?php echo e(old('AppCliente')); ?>" class="form-control"><br>
					</div>

					<?php if($errors->first('ApmCliente')): ?>
			        <i> <?php echo e($errors->first('ApmCliente')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group"> 
			        	<label for="ApmCliente">Correo:</label>
					<input type="text" placeholder="Apellido Materno.." name="ApmCliente" value="<?php echo e(old('ApmCliente')); ?>" class="form-control"><br>
					</div>

					<?php if($errors->first('edad')): ?>
			        <i> <?php echo e($errors->first('edad')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group">
			        	<label for="edad">Edad :</label>
					 <input type="text" placeholder=" Edad..." name="edad" value="<?php echo e(old('edad')); ?>" class="form-control"><br><br>
					</div>

					<?php if($errors->first('sexo')): ?>
			        <i> <?php echo e($errors->first('sexo')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group"> 
			        	<label for="sexo">Sexo:</label>
					<input type="text" placeholder="Sexo.." name="sexo" value="<?php echo e(old('sexo')); ?>" class="form-control"><br>
					</div>

					<?php if($errors->first('email')): ?>
			        <i> <?php echo e($errors->first('email')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group"> 
			        	<label for="email">Correo:</label>
					<input type="text" placeholder="Correo.." name="email" value="<?php echo e(old('email')); ?>" class="form-control"><br>
					</div>

					<?php if($errors->first('telefono')): ?>
			        <i> <?php echo e($errors->first('telefono')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group"> 
			        	<label for="telefono">Telefono:</label>
					<input type="text" placeholder="Telefono.." name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control"><br>
					</div>

					<?php if($errors->first('EstadoCivilCte')): ?>
			        <i> <?php echo e($errors->first('EstadoCivilCte')); ?> </i>
			        <?php endif; ?>
			        <div class="form-group"> 
			        	<label for="EstadoCivilCte">EstadoCivilCte:</label>
					<input type="text" placeholder="Estado EstadoCivil.." name="EstadoCivilCte" value="<?php echo e(old('EstadoCivilCte')); ?>" class="form-control"><br>
					</div>
					
					<div class="form-group col-md-12">
						<label for="id_est">Selecciona estado: </label>
						<select name="id_est" class="form-control">
							<?php foreach($estados as $cr): ?>
							<option value= '<?php echo e($cr->id_est); ?>'> <?php echo e($cr->NomEstado); ?> 
							</option>	
							<?php endforeach; ?>
						</select>
						<br><br>
					<label for="id_mun">Selecciona Municipio: </label>
					<select name="id_mun" class="form-control">
						<?php foreach($municipios as $mun): ?>
						<option value= '<?php echo e($mun->id_mun); ?>'><?php echo e($mun->NomMunicipio); ?> 
						</option>	
						<?php endforeach; ?>
					</select>
					<br><br>
					<label for="num_folio">Selecciona Abogado: </label>
					<select name="num_folio" class="form-control">
					<?php foreach($abogados as $tipabo): ?>
					<option value= '<?php echo e($tipabo->num_folio); ?>'><?php echo e($tipabo->NomAbogado); ?> 
					</option>	
					<?php endforeach; ?>
					</select>
					<br><br>
					<label for="num_folio">Selecciona Tipo Archivo: </label>
					<select name="id_TipoArchivo" class="form-control">
					<?php foreach($tipo_archivos as $tiparch): ?>
					<option value= '<?php echo e($tiparch->id_TipoArchivo); ?>'><?php echo e($tiparch->NomArchivo); ?> 
					</option>	
					<?php endforeach; ?>
					</select>
					<br><br>
					

					<input type="submit" value="Guardar" class="btn btn-success">
					<input type="submit" value="Cancelar" class="btn btn-warning">

				</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>