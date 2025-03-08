<div class="portfolio_area pt-80 pb-70" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-50 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6><?php echo e($menus[3]['subtitle']); ?></h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($menus[3]['name']); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row image_load">
            <?php $__currentLoopData = $list_article_3->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item physics english">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="<?php echo e(url($v->link)); ?>">
                                    <img src="<?php echo e(asset($v->image)); ?>" alt="<?php echo e($v->title); ?>"/>
                                </a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
                                   href="<?php echo e(asset($v->pic)); ?>">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <h2>
                                    <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->title); ?></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/product/1.blade.php ENDPATH**/ ?>