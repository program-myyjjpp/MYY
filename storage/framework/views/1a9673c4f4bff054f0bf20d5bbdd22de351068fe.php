<div class="case_study_area pt-80" id="portfolio">
    <div class="container-fluid">
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
        <div class="row">
            <div class="col-lg-12 grid-item">
                <div class="row">
                    <div class="case_study_list owl-carousel curosel-style">
                        <?php $__currentLoopData = $list_article_3->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12 pdn_0">
                            <div class="single_case_study">
                                <div class="single_case_study_inner">
                                    <div class="single_case_study_thumb">
                                        <a href="<?php echo e(url($v->link)); ?>">
                                            <img class="lozad" data-src="<?php echo e(asset($v->image)); ?>" alt="<?php echo e($v->title); ?>" />
                                        </a>
                                    </div>
                                </div>
                                <div class="single_case_study_content">
                                    <div class="single_case_study_content_inner">
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
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/product/2.blade.php ENDPATH**/ ?>