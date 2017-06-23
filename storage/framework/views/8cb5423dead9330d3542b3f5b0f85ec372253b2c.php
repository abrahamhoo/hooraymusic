

<?php $__env->startSection('body-class'); ?>
the-404
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="contain">
		<div class="media">
			<img src="/assets/img/lamp-post.jpg">
		</div>
		<div class="content">
			<h1>You seem to have upset the delicate internal balance of my housekeeper.</h1>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>