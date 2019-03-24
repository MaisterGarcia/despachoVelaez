<?php $__env->startSection('body'); ?>
	<h1 align="center">Tipos de Abogados en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Abogado</th><th scope="col">Operaciones</th>
		</tr>
		<?php foreach($TipAb as $ab): ?>
			<tr><th scope="row"><?php echo e($ab->idTipoAbogado); ?></th><td><?php echo e($ab->TipoAbogado); ?></td>
			<td><a href="#"><b>Eliminar</b></a>
				<a href="<?php echo e(URL::action('controlador_abogados@modificamTA',['idTipoAbogado'=>$ab->idTipoAbogado])); ?>" ><b>Modificar</b></a>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>