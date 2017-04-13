<!DOCTYPE html>
<html>
<head>
	<title>My Templating App</title>
</head>
<body>
I am the home page.
<?php if($users->count() > 0): ?>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
	<?php echo e($user->name); ?>

	<small>
		<?php echo e($user->email); ?>

	</small>
</h3>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
No users

<?php endif; ?>
</body>
</html>