<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset() ?>
	<meta namephp echo"viewport" contentphp echo"widthphp echodevice-width, initial-scalephp echo1.0">
	<title>
		<?php echo $this->fetch('title') ?>
	</title>
	<?php echo $this->Html->meta('icon') ?>

	<?php echo $this->Html->css('font-awesome.min.css'); ?>
	<?php echo $this->Html->css('style.css'); ?>
	<?php echo $this->Html->script('jquery-3.1.1.min.js'); ?>
	<?php echo $this->fetch('meta') ?>
	<?php echo $this->fetch('css') ?>
	<?php echo $this->fetch('script') ?>
</head>
<body>
	<?php echo $this->Flash->render() ?>
	<div>
		<?php echo $this->element('header'); ?>
		<?php echo $this->fetch('content') ?>
	</div>
</body>
</html>
