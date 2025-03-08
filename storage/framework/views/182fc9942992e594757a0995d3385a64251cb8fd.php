<div class="banner_area banner1 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single_banner">
                    <div class="single_banner_content">
                        <div class="banner_text_content">
                            <h2 class="cd-headline clip is-full-width">
                                <span class="cd-words-wrapper">
                                    <b class="is-visible"><?php echo e($information->banner[0]['title']); ?></b>
                                </span>
                            </h2>
                        </div>
                        <div class="banner_content_text pt-30">
                            <p>
                                <?php echo e($information->banner[0]['subtitle']); ?>

                            </p>
                        </div>
                        <div class="slider_button pt-25 d-flex">
                            <div class="button">
                                <a href="<?php echo e(url($menus[5]->link)); ?>"><?php echo e($menus[5]->link_name); ?><i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="data_science_video">
                            <div class="data_science_video_inner">
                                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo e(url('/')); ?>">
                                    <i class="fa fa-play"></i>
                                    <div id="spinnerbtn"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_banner_thumb">
                    <div class="single_banner_thumb_inner">
                        <img src="<?php echo e($information->banner[0]['image']); ?>" alt="<?php echo e($information->banner[0]['title']); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/banner/6.blade.php ENDPATH**/ ?>