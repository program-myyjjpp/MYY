<div class="about_area pt-85 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                <div class="about_thumb">
                    <img class="lozad" data-src="<?php echo e(asset($information->about[0]['image'])); ?>" alt="<?php echo e($menus[2]->name); ?>" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                <div class="section_title text_left mb-40 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>30 YEARS OF EXPERIENCE</h6>
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
                            <p>
                                <?php echo $information->about[0]['text']; ?>

                            </p>
                        </div>
                    </div>
                    <div class="singel_about_left_inner pl-4">
                        <div class="button two">
                            <a href="<?php echo e(url($menus[2]->link)); ?>"><?php echo e($menus[2]->link_name); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/about/2.blade.php ENDPATH**/ ?>