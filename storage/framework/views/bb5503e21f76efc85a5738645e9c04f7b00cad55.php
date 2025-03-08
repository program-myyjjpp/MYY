<div class="portfolio_area style-2 pt-100 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-50 mt-3" data-cue="zoomIn">
                    <div class="section_sub_title uppercase mb-3">
                        <h6><?php echo e($menus[3]['subtitle']); ?></h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($menus[3]['name']); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $list_article_3->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-5 col-md-6">
                <div class="single_portfolio upp" data-cue="zoomOut">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <a href="<?php echo e(url($v->link)); ?>">
                                <img class="lozad" data-src="<?php echo e(asset($v->image)); ?>" alt="<?php echo e($v->title); ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="portfolio_content">
                        <h2>
                            <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->title); ?></a>
                        </h2>
                        <div class="portfolio-icon">
                            <a href="<?php echo e(url($v->link)); ?>">
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/product/3.blade.php ENDPATH**/ ?>