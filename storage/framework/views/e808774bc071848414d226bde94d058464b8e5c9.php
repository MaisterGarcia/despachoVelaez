<?php $__env->startSection('body'); ?>
<div class="row fixed">
		<div class="col-xs-12 col-md-12">
			<div class="card">
				<div class="card-header">
					Tareas
				</div>
				<div class="card-body">
					<h3 class="card-title">Regitsrar Tarea</h3>
					<form action ="<?php echo e(route('guardaTarea')); ?>" method = 'POST' align="center">
						<?php echo e(csrf_field()); ?>


						<?php if($errors->first('id_Tarea')): ?>
						<i> <?php echo e($errors->first('id_Tarea')); ?> </i> 
						<?php endif; ?>	<br>

						Clave Tarea: <input type = 'text' name = 'id_Tarea' value="<?php echo e($idTarea); ?>" readonly = 'readonly' class="form-control">
						<br>
						<?php if($errors->first('NomTarea')): ?>
						<i> <?php echo e($errors->first('NomTarea')); ?> </i> 
						<?php endif; ?>	<br>
						Nombre de Tarea a Realizar: <input type = 'text' name = 'NomTarea' value="<?php echo e(old('NomTarea')); ?>" class="form-control"><br><br>
						<?php if($errors->first('FechaLimite')): ?>
						<i> <?php echo e($errors->first('FechaLimite')); ?> </i> 
						<?php endif; ?>
						Introduzca Fecha de Limite de Realización de Tarea: <br>
						 <input type = 'text' name = 'FechaLimite' value="<?php echo e(old('FechaLimite')); ?>" placeholder="Formato (año-Mes-dia)" class="form-control">
						<br><br> 
						<?php if($errors->first('FechaFin')): ?>
						<i> <?php echo e($errors->first('FechaFin')); ?> </i> 
						<?php endif; ?>
						Introduzca Fecha de Finalización de Tarea: <br>
						 <input type = 'text' name = 'FechaFin' value="<?php echo e(old('FechaFin')); ?>" placeholder="Formato (año-Mes-dia)" class="form-control">
						<br><br>
						<center><div class="form-group col-md-4">
							<label for="num_folio">Seleccione Abogado a Asignar:</label>
							<select name = 'num_folio' class="form-control">
								<?php foreach($abogados as $ab): ?>
								<option value = '<?php echo e($ab->num_folio); ?>'><?php echo e($ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado); ?></option>
								<?php endforeach; ?>
							</select>
						<br><br>
							<label for="id_EstTar">Seleccione Estado de la Tarea: </label>
							<select name = 'id_EstTar' class="form-control">
								<?php foreach($estadoTarea as $et): ?>
								<option value = '<?php echo e($et->id_EstTar); ?>'><?php echo e($et->EstadoTarea); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						</center>
						<br><br>
						<input type = 'submit' value = 'Guardar' class="btn btn-success">
						<input type = 'reset' value = 'Cancelar' class="btn btn-warning">
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>