<div class="testimonial_area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-50">
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
            <div class="testimonial_list2 owl-carousel curosel-style">
                <?php for($i=1; $i<=4; $i++): ?>
                <div class="testimonial_style_three d-flex">
                    <div class="testimonial_style_three_thumb">
                        <img class="lozad" data-src="<?php echo e(asset($information->testimonial[$i]['image'])); ?>" alt="<?php echo e($information->testimonial[$i]['name']); ?>" />
                    </div>
                    <div class="testimonial_style_three_content">
                        <div class="testimonial_style_three_title">
                            <h4><?php echo e($information->testimonial[$i]['name']); ?></h4>
                            <span>IT Solutions</span>
                        </div>
                        <div class="testimonial_style_three_text pt-4">
                            <p>
                                <?php echo e($information->testimonial[$i]['text']); ?>

                            </p>
                        </div>
                        <div class="testimonial_style_three_reviwer_star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="testimonial_style_three_quote mt-4">
                            <i class="fa fa-quote-left"></i>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/testimonial/2.blade.php ENDPATH**/ ?>