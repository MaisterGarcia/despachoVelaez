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
					Abogados
				</div>
				<div class="card-body">
			<div align="center">
				<h3 class="card-title">Alta Abogados</h3>
					<form role="form" action="<?php echo e(route('guardaabogado')); ?>" method="POST" class="text-center" enctype="multipart/form-data"> 
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('num_folio')): ?>
				        <i> <?php echo e($errors->first('num_folio')); ?> </i>
				        <?php endif; ?> <br>
				        <div class="form-group">
				        	<label for="num_folio">Folio:</label>
						<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="num_folio" value="<?php echo e(old('num_folio')); ?>" class="form-control"><br>
						</div>

						<?php if($errors->first('NomAbogado')): ?>
				        <i> <?php echo e($errors->first('NomAbogado')); ?> </i>
				        <?php endif; ?>
				        <div class="form-group">
				        	<label for="NomAbogado">Nombre:</label>
						<input type="text" placeholder="Nombre..." name="NomAbogado" value="<?php echo e(old('NomAbogado')); ?>" class="form-control"><br>
						</div>

						<?php if($errors->first('AppAbogado')): ?>
				        <i> <?php echo e($errors->first('AppAbogado')); ?> </i>
				        <?php endif; ?> 
				        <div class="form-group">
				        	<label for="AppAbogado">Paterno:</label>
						   <input type="text" placeholder="Apellido Paterno..." name="AppAbogado" value="<?php echo e(old('AppAbogado')); ?>" class="form-control"><br>
						</div>

						<?php if($errors->first('ApmAbogado')): ?>
				        <i> <?php echo e($errors->first('ApmAbogado')); ?> </i>
				        <?php endif; ?> 
				        <div class="form-group"> 
				        	<label for="ApmAbogado">Materno:</label>
						<input type="text" placeholder="Apellido Materno.." name="ApmAbogado" value="<?php echo e(old('ApmAbogado')); ?>" class="form-control"><br>
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
						<input type="text" placeholder="Formato (M=mujer o H=Hombre) Solo la letra" name="sexo" value="<?php echo e(old('sexo')); ?>" class="form-control"><br>
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
						<input type="text" placeholder="Telefono..(10 dígitos)" name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control"><br>
						</div>

						<?php if($errors->first('EstadoCivil')): ?>
				        <i> <?php echo e($errors->first('EstadoCivil')); ?> </i>
				        <?php endif; ?> 
				        <div class="form-group"> 
				        	<label for="EstadoCivil">Estado Civil:</label>
						<input type="text" placeholder="Estado EstadoCivil..(Soltero o Casado)" name="EstadoCivil" value="<?php echo e(old('EstadoCivil')); ?>" class="form-control"><br>
						</div><br>


						<center><div class="form-group col-md-12">
							<label for="id_est">Selecciona estado: </label>
							<select name="id_est" class="form-control" width="30">
								<?php foreach($estados as $est): ?>
								<option value= '<?php echo e($est->id_est); ?>'><?php echo e($est->NomEstado); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
						<br><br>
						<center><div class="form-group col-md-12">
							<label for="id_est">Selecciona Municipio: </label>
							<select name="id_mun" class="form-control">
								<?php foreach($municipios as $mun): ?>
								<option value= '<?php echo e($mun->id_mun); ?>'><?php echo e($mun->NomMunicipio); ?> 
								</option>	
								<?php endforeach; ?>
							</select>
						<br><br>
						
						<center><div class="form-group col-md-12">
							<label for="id_est">Selecciona 	Tipo Abogado: </label>
							<select name="idTipoAbogado" class="form-control">
							<?php foreach($tipo_abogados as $tipabo): ?>
							<option value= '<?php echo e($tipabo->idTipoAbogado); ?>'><?php echo e($tipabo->TipoAbogado); ?> 
							</option>	
							<?php endforeach; ?>
							</select>
						<br><br>
						<?php if($errors->first('archivo')): ?>
				        <i> <?php echo e($errors->first('archivo')); ?> </i>
				        <?php endif; ?> 
						<center>
							<div class="form-group">
							    <label for="exampleFormControlFile1">Selecciona Archivo: </label>
							    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo">
							  </div>
						<br><br>
						<button value="Guardar" class="btn btn-success"> Guardar </button>
						<button value="Cancelar" class="btn btn-warning"> Cancelar </button>

					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>