<?php $__env->startSection("body"); ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">

		<div class="card">	 
			<div class="card-header" >
				Iniciar sesión
			</div>
			<div class="card-body">
				<h1 class="card-title">Iniciar sesión</h1>
				<form action="<?php echo e(route('valida')); ?>" method = 'POST'>
					<?php echo e(csrf_field()); ?>

					<?php if($errors->first('user')): ?> 
						<i> <?php echo e($errors->first('user')); ?> </i> 
						<?php endif; ?>	<br>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">@</div>
						</div>
						<input type="" name="user" class="form-control" placeholder="Usuario">
					</div>	
						<?php if($errors->first('pasw')): ?> 
						<i> <?php echo e($errors->first('pasw')); ?> </i> 
						<?php endif; ?>	<br>			
					<input type="password" name="pasw" class="form-control mb-3" placeholder="Contraseña">
					
					<!-- <input type="submit" name="" class="btn btn-primary"> -->
					<input type = 'submit' value = 'Iniciar Sesion' class="btn btn-success">
				</form>
				<?php if(Session::has('error')): ?>
    				<div><?php echo e(Session::get('error')); ?></div>
					<script>
					    alert("<?php echo e(Session::get('error')); ?>");
					</script>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>