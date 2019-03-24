<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo e(asset('archivo/icono.ico')); ?>" width="40px" heigth="40px">
	<title>Despacho Velazquez</title>

	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('fonts/style.css')); ?>">
</head>
<body>
	<div id="app">
		<header>
			<h3><span class="icon-globe"></span>Despacho Velazquez</h3>
			<div style="display: flex; align-items: center;">
				<?php echo $__env->yieldContent("nav"); ?>
			</div>
		</header>

		<?php echo $__env->yieldContent("asside"); ?>

		<div id="body"><?php echo $__env->yieldContent("body"); ?></div>
		
		
	</div>

	<script src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>