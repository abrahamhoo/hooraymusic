<div class="row grid">
    <div class="col-md-3 col-sm-3 text-center content item">
        <?php if(isset($data[$key])): ?>
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="<?php echo e(asset($data[$key]['cover'])); ?>" >
            <span class="name"><?php echo e($data[$key][$name]); ?></span>
            <hr class="line"/>
            <span class="artist"><?php echo e($data[$key]['artist']); ?></span>
        <?php endif; ?>
    </div>
    <div class="col-md-3 col-sm-3 text-center content item">
        <?php if(isset($data[$key+1])): ?>
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="<?php echo e(asset($data[$key+1]['cover'])); ?>" >
            <span class="name"><?php echo e($data[$key+1][$name]); ?></span>
            <hr class="line"/>
            <span class="artist"><?php echo e($data[$key+1]['artist']); ?></span>
        <?php endif; ?>
    </div>
    <div class="col-md-3 col-sm-3 text-center content item">
        <?php if(isset($data[$key+2])): ?>
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="<?php echo e(asset($data[$key+2]['cover'])); ?>" >
            <span class="name"><?php echo e($data[$key+2][$name]); ?></span>
            <hr class="line"/>
            <span class="artist"><?php echo e($data[$key+2]['artist']); ?></span>
        <?php endif; ?>
    </div>
    <div class="col-md-3 col-sm-3 text-center content item">
        <?php if(isset($data[$key+3])): ?>
            <img class="img-thumbnail cover" style="width: 180px; height: 180px" src="<?php echo e(asset($data[$key+3]['cover'])); ?>" >
            <span class="name"><?php echo e($data[$key+3][$name]); ?></span>
            <hr class="line"/>
            <span class="artist"><?php echo e($data[$key+3]['artist']); ?></span>
        <?php endif; ?>
    </div>
</div>