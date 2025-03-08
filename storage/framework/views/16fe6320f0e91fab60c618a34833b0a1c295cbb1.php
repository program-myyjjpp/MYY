<div class="slider_area d-flex align-items-center slider15" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="single_slider wow fadeInUp" data-wow-delay=".4">
                    <div class="slider_content">
                        <div class="slider_text">
                            <div class="slider_text_inner">
                                <h5><?php echo e($information->banner[0]['subtitle']); ?></h5>
                                <h2 style="color: white"><?php echo e($information->banner[0]['title']); ?></h2>
                            </div>
                            <div class="slider_button pt-3 d-flex">
                                <div class="button">
                                    <a href="<?php echo e(url($menus[6]->link)); ?>">
                                        <?php echo e($menus[6]->link_name); ?> <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="em-hero-inner-shape rotateme">
                        <img src="<?php echo e(asset('assets/images/shape/diamond.png')); ?>" />
                    </div>
                    <div class="em-hero-inner-shape1 bounce-animate4">
                        <img src="<?php echo e(asset('assets/images/shape/arrow-long.png')); ?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="hero_section_thumb wow fadeInDown" data-wow-delay=".5">
                    <div class="hero-main-thumb">
                        <img src="<?php echo e(asset('assets/images/shape/main-img.png')); ?>" />
                    </div>
                    <div class="em-hero-inner-thumb rotateme">
                        <img src="<?php echo e(asset('assets/images/shape/circle-img.png')); ?>" />
                    </div>
                    <div class="em-hero-icon-thumb">
                        <img src="<?php echo e(asset('assets/images/shape/arrow.png')); ?>" />
                    </div>
                    <div class="em-hero-inner-thumb1 bounce-animate3">
                        <img src="<?php echo e(asset('assets/images/shape/envelope.png')); ?>" />
                    </div>
                    <div class="em-hero-inner-thumb2 bounce-animate">
                        <img src="<?php echo e(asset('assets/images/shape/user-plus.png')); ?>" />
                    </div>
                    <div class="em-hero-inner-thumb3 bounce-animate4">
                        <img src="<?php echo e(asset('assets/images/shape/message.png')); ?>" />
                    </div>
                    <div class="em-hero-inner-thumb4 bounce-animate5">
                        <img src="<?php echo e(asset('assets/images/shape/plus.png')); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/7.blade.php ENDPATH**/ ?>