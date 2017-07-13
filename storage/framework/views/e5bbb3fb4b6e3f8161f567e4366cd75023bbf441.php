

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">New Music</div>
                <div class="panel-body">
                    <?php $__currentLoopData = $newMusic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key%4 == 0): ?>
                            
                            <div class="row grid">
                                <div class="col-md-3 text-center content">
                                    <?php if($newMusic[$key]): ?>
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="<?php echo e(asset($newMusic[$key]->cover)); ?>" >
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3 text-center content">
                                    <?php if($newMusic[$key+1]): ?>
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="<?php echo e(asset($newMusic[$key+1]->cover)); ?>" >
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3 text-center content">
                                    <?php if($newMusic[$key+2]): ?>
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="<?php echo e(asset($newMusic[$key+2]->cover)); ?>" >
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3 text-center content">
                                    <?php if($newMusic[$key+3]): ?>
                                    <img class="img-thumbnail" style="width: 180px; height: 180px" src="<?php echo e(asset($newMusic[$key+3]->cover)); ?>" >
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>