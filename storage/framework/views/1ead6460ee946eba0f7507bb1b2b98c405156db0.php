<div class="brand_area pt-80 pb-80 bg_color2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="brand_list owl-carousel curosel-style">
                        <?php for($i=1; $i<=4; $i++): ?>
                            <div class="col-lg-12">
                                <div class="single_brand">
                                    <div class="single_brand_thumb">
                                        <img class="lozad" data-src="<?php echo e(asset($information->partner[$i]['image'])); ?>"/>
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
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/partner/1.blade.php ENDPATH**/ ?>