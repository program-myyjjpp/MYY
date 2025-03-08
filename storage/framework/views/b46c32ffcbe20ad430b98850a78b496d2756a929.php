<div class="slider_area d-flex align-items-center slider7 lozad" id="home" data-bg-image="<?php echo e($information->banner[0]['image']); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_slider">
                    <div class="slider_content text_center">
                        <div class="slider_text">
                            <div class="slider_text_inner">
                                <h2 class="cd-headline clip is-full-width">
                      <span class="cd-words-wrapper">
                        <b class="is-visible"><?php echo e($information->banner[0]['title']); ?></b>
                      </span>
                                </h2>
                            </div>
                            <div class="slider_text_desc pt-4">
                                <p>
                                    <?php echo e($information->banner[0]['subtitle']); ?>

                                </p>
                            </div>
                            <div class="slider_button pt-5">
                                <div class="button">
                                    <a href="<?php echo e(url($menus[2]->link)); ?>"
                                    ><?php echo e($menus[2]->link_name); ?> <i class="fa fa-long-arrow-right"></i
                                        ></a>
                                    <a class="active" href="<?php echo e(url($menus[5]->link)); ?>"
                                    ><?php echo e($menus[5]->link_name); ?><i class="fa fa-long-arrow-right"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/5.blade.php ENDPATH**/ ?>