<div class="<?php echo e($random[$randomIndex++]); ?> nivo_slider_area" id="home">
    <div class="<?php echo e($random[$randomIndex++]); ?> container-fluid">
        <div class="<?php echo e($random[$randomIndex++]); ?> row">
            <div class="<?php echo e($random[$randomIndex++]); ?> em-nivo-slider-wrapper kc-elm kc-css-242493">
                <div id="mainSlider" class="<?php echo e($random[$randomIndex++]); ?> nivoSlider em-slider-image">
                    <?php $__currentLoopData = array_slice($information->banner, 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset($banner['image'])); ?>" alt="<?php echo e($banner['title']); ?>" title="#htmlcaption1_3<?php echo e($index); ?>" />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php $__currentLoopData = array_slice($information->banner, 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="htmlcaption1_3<?php echo e($index); ?>" class="<?php echo e($random[$randomIndex++]); ?> nivo-html-caption em-slider-content-nivo">
                        <div class="<?php echo e($random[$randomIndex++]); ?> em_slider_inner container text-left">
                            <div class="<?php echo e($random[$randomIndex++]); ?> wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
                                <h2 style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;" class="<?php echo e($random[$randomIndex++]); ?> em-slider-main-title"><?php echo e($banner['title']); ?></h2>
                            </div>
                            <div class="<?php echo e($random[$randomIndex++]); ?> wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
                                <h3 style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;" class="<?php echo e($random[$randomIndex++]); ?> em-slider-sub-title">
                                    <?php echo e($banner['subtitle']); ?>

                                </h3>
                            </div>
                            <div class="<?php echo e($random[$randomIndex++]); ?> em-slider-button wow mt-4 bounceInUp em-button-button-area" data-wow-duration="3s" data-wow-delay="0.5s">
                                <a class="<?php echo e($random[$randomIndex++]); ?> em-active-button" href="<?php echo e($menus[$index+2]->link); ?>"><?php echo e($menus[$index+2]->link_name); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/1.blade.php ENDPATH**/ ?>