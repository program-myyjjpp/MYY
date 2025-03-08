<div class="<?php echo e($random[$randomIndex++]); ?> slider_list owl-carousel">
    <?php for($i=1; $i<=3; $i++): ?>
    <div class="<?php echo e($random[$randomIndex++]); ?> slider_area d-flex align-items-center slider1 lozad" data-bg-image="<?php echo e(asset($information->banner[$i]['image'])); ?>">
        <div class="<?php echo e($random[$randomIndex++]); ?> container">
            <div class="<?php echo e($random[$randomIndex++]); ?> row">
                <div class="<?php echo e($random[$randomIndex++]); ?> col-lg-12">
                    <div class="<?php echo e($random[$randomIndex++]); ?> single_slider">
                        <div class="<?php echo e($random[$randomIndex++]); ?> slider_content">
                            <div class="<?php echo e($random[$randomIndex++]); ?> slider_text">
                                <div class="<?php echo e($random[$randomIndex++]); ?> slider_text_inner">
                                    <h5><?php echo e($information->banner[$i]['subtitle']); ?></h5>
                                    <h2 style="color: white"><?php echo e($information->banner[$i]['title']); ?></h2>
                                </div>
                                <div class="<?php echo e($random[$randomIndex++]); ?> slider_button pt-5 d-flex">
                                    <div class="<?php echo e($random[$randomIndex++]); ?> button">
                                        <a href="<?php echo e(url($menus[$i+3]->link)); ?>"><?php echo e($menus[$i+3]->link_name); ?><i class="<?php echo e($random[$randomIndex++]); ?> fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/2.blade.php ENDPATH**/ ?>