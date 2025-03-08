<div class="service_area style-14 pt-100 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title mb-55" data-cue="slideInRight">
                    <div class="section_main_title">
                        <h2>"<span><?php echo e($information->advantage[0]['title']); ?></span>"</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tchn-button text-right" data-cue="slideInRight">
                    <a href="<?php echo e(url($menus[6]->link)); ?>"><?php echo e($menus[6]->link_name); ?><i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service_single_box" data-cue="zoomIn">
                    <div class="box-head">
                        <div class="service_icon">
                            <img class="lozad" data-src="<?php echo e(asset('assets/images/software-service-img1-1.png')); ?>" alt="<?php echo e($information->advantage[1]['name']); ?>" />
                        </div>
                        <div class="service_title">
                            <h4><?php echo e($information->advantage[1]['name']); ?></h4>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service_desc">
                            <p>
                                <?php echo e($information->advantage[1]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_single_box" data-cue="zoomOut">
                    <div class="box-head">
                        <div class="service_icon">
                            <img class="lozad" data-src="<?php echo e(asset('assets/images/software-service-img02.png')); ?>" alt="<?php echo e($information->advantage[2]['name']); ?>" />
                        </div>
                        <div class="service_title">
                            <h4><?php echo e($information->advantage[2]['name']); ?></h4>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service_desc">
                            <p>
                                <?php echo e($information->advantage[2]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_single_box" data-cue="zoomIn">
                    <div class="box-head">
                        <div class="service_icon">
                            <img class="lozad" data-src="<?php echo e(asset('assets/images/software-service-img03.png')); ?>" alt="<?php echo e($information->advantage[3]['name']); ?>" />
                        </div>
                        <div class="service_title">
                            <h4><?php echo e($information->advantage[3]['name']); ?></h4>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service_desc">
                            <p>
                                <?php echo e($information->advantage[3]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/advantage/3.blade.php ENDPATH**/ ?>