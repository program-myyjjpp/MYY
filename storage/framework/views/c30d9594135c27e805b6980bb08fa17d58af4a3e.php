<div class="testimonial_area bg_color2 pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-50 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6><?php echo e($information->testimonial[0]['subtitle']); ?></h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($information->testimonial[0]['title']); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="testimonial_list owl-carousel curosel-style">
                        <?php for($i=1; $i<=4; $i++): ?>
                        <div class="col-lg-12">
                            <div class="single_testimonial_two mt-3 mb-5">
                                <div class="single_testimonial_content_two">
                                    <div class="single_testimonial_thumb_two mb-4">
                                        <img class="lozad" data-src="<?php echo e(asset($information->testimonial[$i]['image'])); ?>" alt="<?php echo e($information->testimonial[$i]['name']); ?>" />
                                    </div>
                                    <div class="single_testimonial_content_text_two mb-4">
                                        <p>
                                            <?php echo e($information->testimonial[$i]['text']); ?>

                                        </p>
                                    </div>
                                    <div class="single_testimonial_content_title_two mt-4">
                                        <h4><?php echo e($information->testimonial[$i]['name']); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/testimonial/3.blade.php ENDPATH**/ ?>