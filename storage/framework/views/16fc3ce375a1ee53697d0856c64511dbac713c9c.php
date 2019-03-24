<?php $__env->startSection("body"); ?>	
	<div class="row">
		<div class="col-xs-12 col-md-12">

			<div class="card">
				<div class="card-header">
					Submaterias
				</div>
				<div class="card-body">
					<h5 class="card-title">Submaterias</h5>
					<form action="<?php echo e(route('guardaSubmateria')); ?>" method="POST" align="center">
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('id_Submateria')): ?>
						<i> <?php echo e($errors->first('id_Submateria')); ?> </i> 
						<?php endif; ?>	<br>

						Clave Submateria: <input type = 'text' name = 'id_Submateria' value="<?php echo e($idSubm); ?>" readonly = 'readonly' class="form-control">
						<br>
						<?php if($errors->first('NomSubmateria')): ?>
						<i> <?php echo e($errors->first('NomSubmateria')); ?> </i> 
						<?php endif; ?>	<br>
						Nombre de Submateria a Realizar: <input type = 'text' name = 'NomSubmateria' value="<?php echo e(old('NomSubmateria')); ?>" class="form-control" placeholder="Inserta nombre de submateria empezando solo la primera palabra con mayúsculas"><br><br>
						<center><div class="form-group col-md-4">
							<label for="num_juicio">Seleccione Nombre de Demandante a Asignar:</label>
							<select name = 'num_juicio' class="form-control">
								<?php foreach($juicios as $jui): ?>
								<option value = '<?php echo e($jui->num_juicio); ?>'><?php echo e($jui->NomDemandante); ?></option>
								<?php endforeach; ?>
							</select>
							<br><br>
						</div>
						</center>
						<!-- <input type="submit" name="" class="btn btn-primary"> -->
						<button class="btn btn-success">Guardar</button>
						<button class="btn btn-warning">Cancelar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>