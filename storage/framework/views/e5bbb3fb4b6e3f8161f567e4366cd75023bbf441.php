

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">New Album</div>
                <div class="panel-body">
                    <?php $__currentLoopData = $newAlbum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key%4 == 0): ?>
                            <?php echo $__env->make('partials.grid', ['data' => $newAlbum, 'name' => 'album_name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">New Song</div>
                <div class="panel-body">
                    <?php $__currentLoopData = $newSong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key%4 == 0): ?>
                            <?php echo $__env->make('partials.grid', ['data' => $newSong, 'name' => 'song_name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>