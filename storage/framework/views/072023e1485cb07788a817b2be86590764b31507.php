<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("body"); ?>
<h1 align="center">Reporte abogados</h1>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr><th class="col">Clave</th ><th class="col">Nombre</td><th class="col">edad</th ><th class="col">sexo</th ><th class="col">email</th ><th class="col">telefono</th ><th class="col">Tipo de Abogado</th ><th class="col">Archivo</th ><th class="col">Operaciones</th ></tr>
	<?php foreach($abogado as $ab): ?>
		<tr><th class="row col-12"> <?php echo e($ab->num_folio); ?> </th >
		<td><?php echo e($ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado); ?></td>
		<td><?php echo e($ab->edad); ?></td>
		<td><?php echo e($ab->sexo); ?></td>
		<td><?php echo e($ab->email); ?></td>
		<td><?php echo e($ab->telefono); ?></td>
		<td><?php echo e($ab->TipoAbogado); ?></td>
		<td><img src="<?php echo e(asset('archivo/'.$ab->Archivo)); ?>" alt="Imagen de Usuario" height="50" width="50"></td>
		<td>
			<?php if($ab->deleted_at==""): ?>
		
			<a href="<?php echo e(URL::action('Cabogados@eliminaabogado', ['num_folio'=>$ab->num_folio])); ?>" class="icon-trash"></a>
			<a href="<?php echo e(URL::action('Cabogados@modificaabogado', ['num_folio'=>$ab->num_folio])); ?>" class="icon-pencil"></a>
			<?php else: ?>
			<a href="<?php echo e(URL::action('Cabogados@restarurarabogado', ['num_folio'=>$ab->num_folio])); ?>" class="icon-arrow-sync-outline"></a>
			<?php endif; ?>
		</td></tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>