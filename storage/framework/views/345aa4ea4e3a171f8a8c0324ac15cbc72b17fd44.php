<div class="switcher">
	<div class="dropdown">
		<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			<?php $__currentLoopData = $versions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li role="presentation">
					<a role="menuitem" tabindex="-1" href="<?php echo e(url('docs/'.$key.$currentSection)); ?>"><?php echo e($display); ?></a>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
</div>
