<div class="about_area pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                <div class="section_title text_left mb-40 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>// <?php echo e($menus[2]->subtitle); ?></h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($menus[2]->name); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                    <div class="section_content_text pt-4">
                        <?php echo $information->about[0]['text']; ?>

                    </div>
                </div>
                <div class="single_about_signesur align-items-center">
                    <div class="single_about_signesur_thumb mr-4">
                        <img class="lozad" data-src="<?php echo e(asset($information->team[9]['image'])); ?>" alt="<?php echo e($information->team[9]['name']); ?>" />
                    </div>
                    <div class="single_about_signesur_content pt-3">
                        <h4><?php echo e($information->team[9]['name']); ?></h4>
                        <span><?php echo e($information->team[9]['text']); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                <div class="single_about_thumb mb-3">
                    <div class="single_about_thumb_inner">
                        <img class="lozad" data-src="<?php echo e(asset($information->about[0]['image'])); ?>" alt="<?php echo e($menus[2]->name); ?>" />
                    </div>
                    <div class="border_ift"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/about/4.blade.php ENDPATH**/ ?>