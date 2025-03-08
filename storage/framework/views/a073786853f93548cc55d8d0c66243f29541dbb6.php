<div class="about_area pt-70 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                <div class="section_title text_left mb-40 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6><?php echo e($menus[2]->subtitle); ?></h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($menus[2]->name); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
                <div class="singel_about_left mb-30">
                    <div class="singel_about_left_inner mb-3">
                        <div class="singel-about-content boder pl-4">
                            <?php echo $information->about[0]['text']; ?>

                        </div>
                    </div>
                    <div class="singel_about_left_inner pl-4">
                        <div class="button two">
                            <a href="<?php echo e(url($menus[2]->link)); ?>"><?php echo e($menus[2]->link_name); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                <div class="single_about_thumb mb-3">
                    <div class="single_about_thumb_inner">
                        <img class="lozad" data-src="<?php echo e(asset($information->about[0]['image'])); ?>"
                             alt="<?php echo e($menus[2]->name); ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/about/1.blade.php ENDPATH**/ ?>