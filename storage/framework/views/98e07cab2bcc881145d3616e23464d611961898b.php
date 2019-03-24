<?php $__env->startSection('body'); ?>
<body>
	<h1 align="center">Tipos de Juzgados en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th ><th scope="col">Tipo Juzgado</th ><th scope="col">Operaciones</th >	
		</tr>
		<?php foreach($TipJuz as $juz): ?>
			<tr><th scope="row"><?php echo e($juz->id_TipoJuzgado); ?></th ><td><?php echo e($juz->TipoJuzgado); ?></td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>