<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homepage</title>
	<link rel="stylesheet" href="">
</head>
<body>
<style type ="text/css">
	body {
    background-color: lightgray;
}
</style>
<div id="change" style="height: 100px; background-color: #FF2600">
	<h2 style="color: #ffffff"; >Enabling people
throughout the world to
live a happy and
healthy life.</h2>
</div>
<p>We offer a online digital health
program that enable people to prevent
diseases and live a happier life.</p>
</body>
</html>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>