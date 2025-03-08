<div id="sticky-header" class="techno_nav_manu transparent_menu white d-md-none d-lg-block d-sm-none d-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="menu">
                <a href="<?php echo e(url('/')); ?>" class="logo">
                    <img class="down" src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>" />
                    <img class="main_sticky" src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>" />
                </a>
                <ul class="clearfix">
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="donate-btn-header">
                        <a class="dtbtn" href="<?php echo e(url($menus[6]->link)); ?>">立即预约</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
    <div class="mobile-menu">
        <nav class="techno_menu">
            <ul class="clearfix">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/header/3.blade.php ENDPATH**/ ?>