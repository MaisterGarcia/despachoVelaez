<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Tipo Abogado</title>
</head>
<body>
	<h1 align="center">Modifica Tipo de Abogado</h1>
	<form action ="<?php echo e(route('guardaedicionmTA')); ?>" method = 'POST' align="center">
		<?php echo e(csrf_field()); ?>


		<?php if($errors->first('idTipoAbogado')): ?>
		<i> <?php echo e($errors->first('idTipoAbogado')); ?> </i> 
		<?php endif; ?>	<br>

		Clave Tipo Abogado: <input type = 'text' name = 'idTipoAbogado' value="<?php echo e($infom->idTipoAbogado); ?>" readonly = 'readonly'>
		<br><br>
		<?php if($errors->first('TipoAbogado')): ?> 
		<i> <?php echo e($errors->first('TipoAbogado')); ?> </i> 
		<?php endif; ?>	<br>
		Descripción del Tipo: <input type = 'text' name = 'TipoAbogado' value="<?php echo e($infom->TipoAbogado); ?>">
		<br>
		<br>
		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>