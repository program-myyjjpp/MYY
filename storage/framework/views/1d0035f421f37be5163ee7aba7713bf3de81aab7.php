<div class="slider_area d-flex align-items-center slider5 lozad" id="home" data-bg-image="<?php echo e(asset($information->banner[0]['image'])); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_slider">
                    <div class="slider_content">
                        <div class="slider_text">
                            <div class="slider_text_inner">
                                <h5><?php echo e($information->banner[0]['subtitle']); ?></h5>
                                <h2 style="color: white"><?php echo e($information->banner[0]['title']); ?></h2>
                            </div>
                            <div class="slider_button pt-5 d-flex">
                                <div class="button">
                                    <a href="<?php echo e(url($menus[6]->link)); ?>"><?php echo e($menus[6]->link_name); ?><i class="fa fa-long-arrow-right"></i>
                                    </a>
                                    <a class="active" href="<?php echo e(url($menus[2]->link)); ?>"><?php echo e($menus[2]->link_name); ?><i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider_rot two">
                        <div class="single_slider_rot_inner rotateme">
                            <img class="lozad" data-src="<?php echo e(asset('assets/images/sdt.png')); ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/3.blade.php ENDPATH**/ ?>