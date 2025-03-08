<div class="blog_area pt-85 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section_title text_left mb-60 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6><?php echo e($menus[4]['subtitle']); ?></h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($menus[4]['name']); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section_button mt-50">
                    <div class="button two">
                        <a href="<?php echo e(url($menus[4]['link'])); ?>"><?php echo e($menus[4]['link_name']); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $list_article_4->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog mb-4">
                        <div class="single_blog_thumb pb-4">
                            <a href="<?php echo e(url($v->link)); ?>">
                                <img class="lozad" data-src="<?php echo e(asset($v->image)); ?>" alt="<?php echo e($v->title); ?>"/>
                            </a>
                        </div>
                        <div class="single_blog_content pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <span class="meta-date pl-3"><?php echo e(date('Y-m-d', strtotime($v->datatime))); ?></span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3 style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                    <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->title); ?></a>
                                </h3>
                            </div>
                            <div class="blog_description">
                                <p>
                                    <?php echo e(mb_substr(strip_tags($v->content), 0, 100) . '...'); ?>

                                </p>
                            </div>
                            <div class="blog_page_button pb-4">
                                <a href="<?php echo e(url($v->link)); ?>">阅读<i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/news/1.blade.php ENDPATH**/ ?>