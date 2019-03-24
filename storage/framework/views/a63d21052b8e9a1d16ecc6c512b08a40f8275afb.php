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

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="card">
					<div class="card-header">
						Juzgados
					</div>
				<div class="card-body">
					<div align="center">
			<h3 class="card-title">Alta Juzgado</h3>
			<div align="center">
			<form role="form" action="<?php echo e(route('guardajuzgados')); ?>" method="POST" class="text-center" enctype="multipart/form-data" class="form-control"> 
				<?php echo e(csrf_field()); ?>


				<?php if($errors->first('FolioJuzgado')): ?>
		        <i> <?php echo e($errors->first('FolioJuzgado')); ?> </i>
		        <?php endif; ?> <br>
		        <div class="form-group">
		        	<label for="FolioJuzgado">Folio:</label>
				<input type="text" placeholder="Folio..." name="FolioJuzgado" class="form-control"><br>
				</div>

				<?php if($errors->first('Pais')): ?>
		        <i> <?php echo e($errors->first('Pais')); ?> </i>
		        <?php endif; ?> <br>
		        <div class="form-group">
		        	<label for="Pais">Pais:</label>
				<input type="text" placeholder="Pais..." name="Pais" value="<?php echo e(old('Pais')); ?>" class="form-control"><br>
				</div>

				<?php if($errors->first('No_Juzgado')): ?>
		        <i> <?php echo e($errors->first('No_Juzgado')); ?> </i>
		        <?php endif; ?> <br>
		        <div class="form-group">
		        	<label for="No_Juzgado">Juzgado:</label>
				   <input type="text" placeholder="Juzgado..." name="No_Juzgado" value="<?php echo e(old('No_Juzgado')); ?>" class="form-control"><br>
				</div>

				<?php if($errors->first('Localizacion')): ?>
		        <i> <?php echo e($errors->first('Localizacion')); ?> </i>
		        <?php endif; ?> <br>
		        <div class="form-group">
		        	<label for="Localizacion">Juzgado:</label>
				   <input type="text" placeholder="Juzgado..." name="Localizacion" value="<?php echo e(old('Localizacion')); ?>" class="form-control"><br>
				</div>

				<label for="id_EstTar">Selecciona estado: </label>
				 <select name="id_TipoJuzgado" class="form-control">
				<?php foreach($tipo_juzgados as $tipjuz): ?>
				<option value= '<?php echo e($tipjuz->id_TipoJuzgado); ?>'> <?php echo e($tipjuz->TipoJuzgado); ?> 
				</option>	
				<?php endforeach; ?>
				</select>
				<br>
				
		        

				

				<input type="submit" value="Guardar" class="btn btn-success">
				<input type="submit" value="Cancelar" class="btn btn-warning">

			</form>
			</div>
	</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>