<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Tipo de Documento Legal</title>
</head>
<body>
	<h1 align="center">Modificar Tipo de Archivo</h1>
	<form action ="<?php echo e(route('guardaedicionmTArc')); ?>" method = 'POST' align="center">
		<?php echo e(csrf_field()); ?>


		<?php if($errors->first('idTipoArchivo')): ?>
		<i> <?php echo e($errors->first('idTipoArchivo')); ?> </i> 
		<?php endif; ?>	<br>

		Clave Tipo Documento: <input type = 'text' name = 'idTipoArchivo' value="<?php echo e($infom->id_TipoArchivo); ?>" readonly = 'readonly'>
		<br><br>
		<?php if($errors->first('NomArchivo')): ?> 
		<i> <?php echo e($errors->first('NomArchivo')); ?> </i> 
		<?php endif; ?>	<br>
		Descripción del Tipo de Documento: <input type = 'text' name = 'NomArchivo' value="<?php echo e($infom->NomArchivo); ?>">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>