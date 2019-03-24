<?php $__env->startSection("nav"); ?>
<?php echo $__env->make("templates.layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection("asside"); ?>
<?php echo $__env->make("templates.layouts.asside", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 
<style type="text/css">
#miTablaPersonalizada th{
  width: 400px;
  overflow: auto;

}	
table{
  table-layout: fixed;
}
</style>
<?php $__env->startSection("body"); ?>
<h1 align="center">Archivos por Juicio y cliente</h1>
<table border="1" align="center" class="table table-dark table-hover table-responsive">
	<tr id="miTablaPersonalizada"><th>Tipo Archivo</th ><th>Nombre Cliente</td><th>Clave Juicio</th><th>Nombre Juicio</th ><th>Nombre de Archivo</th ><th>Descargar</th >
	<?php foreach($resultado as $res): ?>
		<tr id="miTablaPersonalizada">
		<?php if(preg_match('/xlsx/i', $res->archivo)): ?>
			<?php $doctip='excel.png'; ?>
		<?php elseif($res->archivo=="sindocumento"): ?>
			<?php $doctip="advertencia.png"; ?>
		<?php elseif(preg_match('/docx/i', $res->archivo)): ?>
			<?php $doctip="word.png"; ?>
		<?php elseif(preg_match('/pdf/i', $res->archivo)): ?>
		 	<?php $doctip="pdf.png"; ?>
		<?php elseif(preg_match('/pptx/i', $res->archivo)): ?>
		 	<?php $doctip="pdf.png"; ?>
		<?php endif; ?>
		<th><img src="<?php echo e(asset('archivo/'.$doctip)); ?>" alt="Tipo de Archivo" height="50" width="50"></th >
		<td><?php echo e($res->NomDemandante); ?></td>
		<td><?php echo e($res->num_juicio); ?></td>
		<td><?php echo e($res->NomTipoJuicio); ?></td>
		<td><?php echo e($res->archivo); ?></td>
		<td><a href="<?php echo e(asset('archivo/'.$res->archivo)); ?>"><b>Descargar</b></a></td>
		</tr>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
<?php echo $__env->make("templates.layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>