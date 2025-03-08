<div class="<?php echo e($random[$randomIndex++]); ?> header_top_menu pt-2 pb-2 bg_color">
    <div class="<?php echo e($random[$randomIndex++]); ?> container">
        <div class="<?php echo e($random[$randomIndex++]); ?> row">
            <div class="<?php echo e($random[$randomIndex++]); ?> col-lg-8 col-sm-8">
                <div class="<?php echo e($random[$randomIndex++]); ?> header_top_menu_address">
                    <div class="<?php echo e($random[$randomIndex++]); ?> header_top_menu_address_inner">
                        <ul>
                            <li>
                                <a href="mailto:<?php echo e($information->email); ?>">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> fa fa-envelope-o"></i><?php echo e($information->email); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/')); ?>">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> fa fa-map-marker"></i><?php echo e($information->address); ?>

                                </a>
                            </li>
                            <li>
                                <a href="tel:<?php echo e($information->phone); ?>">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> fa fa-phone"></i>+ <?php echo e($information->phone); ?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="<?php echo e($random[$randomIndex++]); ?> col-lg-4 col-sm-4">
                <div class="<?php echo e($random[$randomIndex++]); ?> header_top_menu_icon">
                    <div class="<?php echo e($random[$randomIndex++]); ?> header_top_menu_icon_inner">
                        <ul>
                            <li>
                                <a href="<?php echo e(url('/')); ?>">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/')); ?>">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/')); ?>">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sticky-header" class="<?php echo e($random[$randomIndex++]); ?> techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
    <div class="<?php echo e($random[$randomIndex++]); ?> container">
        <div class="<?php echo e($random[$randomIndex++]); ?> row align-items-center">
            <div class="<?php echo e($random[$randomIndex++]); ?> menu">
                <a href="<?php echo e(url('/')); ?>" class="<?php echo e($random[$randomIndex++]); ?> logo">
                    <img class="<?php echo e($random[$randomIndex++]); ?> down" src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>" />
                    <img class="<?php echo e($random[$randomIndex++]); ?> main_sticky lozad" data-src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>" />
                </a>
                <ul class="<?php echo e($random[$randomIndex++]); ?> clearfix">
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="<?php echo e($random[$randomIndex++]); ?> donate-btn-header">
                        <a class="<?php echo e($random[$randomIndex++]); ?> dtbtn" href="<?php echo e(url($menus[6]->link)); ?>">现在预约</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="<?php echo e($random[$randomIndex++]); ?> mobile-menu-area d-sm-block d-md-block d-lg-none">
    <div class="<?php echo e($random[$randomIndex++]); ?> mobile-menu">
        <nav class="<?php echo e($random[$randomIndex++]); ?> techno_menu">
            <ul class="<?php echo e($random[$randomIndex++]); ?> clearfix">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/header/2.blade.php ENDPATH**/ ?>