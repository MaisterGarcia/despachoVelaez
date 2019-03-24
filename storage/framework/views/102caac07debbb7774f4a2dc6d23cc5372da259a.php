<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?>
<link rel="stylesheet" href="css/bootstrap-date.css">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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

					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								<?php if($errors->first('id_Tarea')): ?>
								<i> <?php echo e($errors->first('id_Tarea')); ?> </i> 
								<?php endif; ?>	<br>

								Clave Tarea: <input type = 'text' name = 'id_Tarea' value="<?php echo e($idTarea); ?>" readonly = 'readonly' class="form-control">
							</div>
							<div class="form-group col-6">
								<?php if($errors->first('NomTarea')): ?>
								<i> <?php echo e($errors->first('NomTarea')); ?> </i> 
								<?php endif; ?>	<br>
								Nombre de Tarea a Realizar: <input type = 'text' name = 'NomTarea' value="<?php echo e(old('NomTarea')); ?>" class="form-control">
							</div>
							<div class="col-md-6 ">
								<?php if($errors->first('FechaLimite')): ?>
								<i> <?php echo e($errors->first('FechaLimite')); ?> </i> 
								<?php endif; ?>
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario'>
										Introduzca Fecha de Limite de Realización de Tarea:<input type='text' id="txtFecha" class="form-control"  readonly name = 'FechaLimite' value="<?php echo e(old('FechaLimite')); ?>"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
						<div class="col-md-6 ">
								<?php if($errors->first('FechaFin')): ?>
						<i> <?php echo e($errors->first('FechaFin')); ?> </i> 
						<?php endif; ?>
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario'>
										Introduzca Fecha de Finalización de Tarea:<input type='text' id="txtFecha" class="form-control"  readonly name = 'FechaFin' value="<?php echo e(old('FechaFin')); ?>"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
						<div class="form-group col-6">
							<label for="num_folio">Seleccione Abogado a Asignar:</label>
							<select name = 'num_folio' class="form-control">
								<?php foreach($abogados as $ab): ?>
								<option value = '<?php echo e($ab->num_folio); ?>'><?php echo e($ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado); ?></option>
								<?php endforeach; ?>
							</select>
							</div>
							<div class="form-group col-6">
							Seleccione Estado de la Tarea:
							<select name = 'id_EstTar' class="form-control">
								<?php foreach($estadoTarea as $et): ?>
								<option value = '<?php echo e($et->id_EstTar); ?>'><?php echo e($et->EstadoTarea); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
				</div>
				<input type = 'submit' value = 'Guardar' class="btn btn-success col-2">
				<input type = 'reset' value = 'Cancelar' class="btn btn-warning col-2">
			</div>
		</form>
	</div>
</div>
</div>
</div>
<!--FIN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.es.js"></script>
<script type="text/javascript">
	$('#divMiCalendario').datetimepicker({
		format: 'YYYY-MM-DD '    
	});
	//$('#divMiCalendario').data("DateTimePicker").show();
	$('#divMiCalendario2').datetimepicker({
		format: 'YYYY-MM-DD '    
	});
	//$('#divMiCalendario2').data("DateTimePicker").show();
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>