<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
</head>
<body>

<header>
	
	<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>


	<main>
		<?php echo $__env->yieldContent('content'); ?>

		
	</main>

<footer>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>

	
</body>
</html>

