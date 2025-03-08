<div class="call_do_action pt-85 pb-130 bg_color lozad" data-bg-image="<?php echo e(asset('assets/images/call-bg.png')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section_title white text_left mb-60 mt-3">
                    <div class="phone_number mb-3">
                        <h5>+<?php echo e($information->phone); ?></h5>
                    </div>
                    <div class="section_main_title">
                        <h2>现在就可以联系我们</h2>
                    </div>
                    <div class="button three mt-40">
                        <a href="<?php echo e(url($menus[6]->link)); ?>"><?php echo e($menus[6]->link_name); ?><i
                                class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="counter_area">
    <div class="container">
        <div class="row cntr_bg_up nagative_margin pt-50 pb-45">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1>
                            <span class="counter">15</span>
                            <span>K</span>
                        </h1>
                    </div>
                    <div class="counter_desc">
                        <h5><?php echo e($information->honor[1]['name']); ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1>
                            <span class="counter">1280</span>
                            <span>+</span>
                        </h1>
                    </div>
                    <div class="counter_desc">
                        <h5><?php echo e($information->honor[2]['name']); ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1>
                            <span class="counter">10</span>
                            <span>K</span>
                        </h1>
                    </div>
                    <div class="counter_desc">
                        <h5><?php echo e($information->honor[3]['name']); ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1>
                            <span class="counter">992</span>
                            <span>+</span>
                        </h1>
                    </div>
                    <div class="counter_desc">
                        <h5><?php echo e($information->honor[4]['name']); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/honor/1.blade.php ENDPATH**/ ?>