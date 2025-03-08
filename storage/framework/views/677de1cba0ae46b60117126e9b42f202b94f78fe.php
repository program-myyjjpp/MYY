<div class="slider_area appointment d-flex align-items-center slider6 lozad" id="home" data-bg-image="<?php echo e($information->banner[0]['image']); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="single_slider">
                    <div class="slider_content">
                        <div class="slider_text">
                            <div class="slider_text_inner">
                                <h5><?php echo e($information->banner[0]['subtitle']); ?></h5>
                                <h2 style="color: white"><?php echo e($information->banner[0]['title']); ?></h2>
                            </div>
                            <div class="slider-video two mt-5">
                                <div class="video-icon"></div>
                            </div>
                            <div class="slider_button ml-120">
                                <div class="button">
                                    <a href="<?php echo e(url($menus[6]->link)); ?>"><?php echo e($menus[6]->name); ?><i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="appointment">
                    <div class="sign-up-form-wrap p-5">
                        <div class="sign-up-form-header text-center mb-4">
                            <h4 class="appointment_title mb-2"><?php echo e($information->freequote[0]['title']); ?></h4>
                            <p><?php echo e($information->freequote[0]['subtitle']); ?></p>
                        </div>
                        <form action="<?php echo e(url('/')); ?>" method="POST" id="dreamit-form" class="sign-up-form">
                            <div class="form-group input-group">
                                <input type="text" name="name" class="form-control" placeholder="姓名" required />
                            </div>
                            <div class="form-group input-group">
                                <input type="email" name="email" class="form-control" placeholder="邮箱" required />
                            </div>
                            <div class="form-group input-group">
                                <input type="text" name="phone" class="form-control" placeholder="电话" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn" value="提交" />
                            </div>
                            <div class="form-check d-flex align-items-center text-center"></div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_bottom_shape">
            <div class="slider_bottom_shape_inner">
                <img src="assets/images/sld-shap.svg" alt="" />
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/4.blade.php ENDPATH**/ ?>