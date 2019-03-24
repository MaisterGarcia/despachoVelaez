<?php $__env->startSection('body'); ?>
	<h1 align="center">Tipos de Archivos usados para los clientes en Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Archivo</th><th scope="col">Operaciones</th>	
		</tr>
		<?php foreach($TipArc as $tar): ?>
			<tr><th scope="row"><?php echo e($tar->id_TipoArchivo); ?></th><td><?php echo e($tar->NomArchivo); ?></td>
			<td><a href="#">Eliminar </a>
				<a href="<?php echo e(URL::action('controlador_TipoArchivos@modificamTArc',['id_TipoArchivo'=>$tar->id_TipoArchivo])); ?>">Modificar</a>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>