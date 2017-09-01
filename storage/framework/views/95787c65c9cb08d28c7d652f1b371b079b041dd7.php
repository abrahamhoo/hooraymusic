<div id="carousel" class="carousel slide">
    <ol class="carousel-indicators">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($key == 0): ?>
            <li data-target="#carousel" data-slide-to="<?php echo e($key); ?>" class="active"></li>
            <?php else: ?>
            <li data-target="#carousel" data-slide-to="<?php echo e($key); ?>"></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
    <div class="carousel-inner">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($key == 0): ?>
            <div class="item active">
            <?php else: ?>
            <div class="item">
            <?php endif; ?>
                <a href="<?php echo e($value['url']); ?>">
                    <img src="<?php echo e(asset($value['cover'])); ?>" alt="<?php echo e($value['comment']); ?>">
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
