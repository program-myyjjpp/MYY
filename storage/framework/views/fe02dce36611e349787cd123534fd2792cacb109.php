<header class="<?php echo e($random[$randomIndex++]); ?> header">
    <div class="<?php echo e($random[$randomIndex++]); ?> main-navigation">
        <nav class="<?php echo e($random[$randomIndex++]); ?> navbar navbar-expand-lg">
            <div class="<?php echo e($random[$randomIndex++]); ?> container position-relative">
                <a class="<?php echo e($random[$randomIndex++]); ?> navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img class="<?php echo e($random[$randomIndex++]); ?> lozad" data-src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>">
                </a>
                <div class="<?php echo e($random[$randomIndex++]); ?> mobile-menu-right">
                    <div class="<?php echo e($random[$randomIndex++]); ?> search-btn">
                        <button type="button" class="<?php echo e($random[$randomIndex++]); ?> nav-right-link search-box-outer">
                            <i class="<?php echo e($random[$randomIndex++]); ?> far fa-search"></i>
                        </button>
                    </div>
                    <button class="<?php echo e($random[$randomIndex++]); ?> navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="<?php echo e($random[$randomIndex++]); ?> navbar-toggler-mobile-icon">
                                    <i class="<?php echo e($random[$randomIndex++]); ?> far fa-bars"></i>
                                </span>
                    </button>
                </div>
                <div class="<?php echo e($random[$randomIndex++]); ?> collapse navbar-collapse" id="main_nav">
                    <ul class="<?php echo e($random[$randomIndex++]); ?> navbar-nav">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="<?php echo e($random[$randomIndex++]); ?> nav-item">
                                <a class="<?php echo e($random[$randomIndex++]); ?> nav-link" href="<?php echo e(url($v->link)); ?>"><?php echo e($v->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="<?php echo e($random[$randomIndex++]); ?> nav-right">
                        <div class="<?php echo e($random[$randomIndex++]); ?> search-btn">
                            <button type="button" class="<?php echo e($random[$randomIndex++]); ?> nav-right-link search-box-outer">
                                <i class="<?php echo e($random[$randomIndex++]); ?> far fa-search"></i>
                            </button>
                        </div>
                        <div class="<?php echo e($random[$randomIndex++]); ?> call-wrap">
                            <div class="<?php echo e($random[$randomIndex++]); ?> icon">
                                <i class="<?php echo e($random[$randomIndex++]); ?> far fa-phone-volume"></i>
                            </div>
                            <div class="<?php echo e($random[$randomIndex++]); ?> content">
                                <span>Call 24/7</span>
                                <h6>
                                    <a href="tel:<?php echo e($information->phone); ?>"><?php echo e($information->phone); ?></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="<?php echo e($random[$randomIndex++]); ?> search-popup">
    <button class="<?php echo e($random[$randomIndex++]); ?> close-search">
        <span class="<?php echo e($random[$randomIndex++]); ?> far fa-times"></span>
    </button>
    <form action="<?php echo e(url('/')); ?>">
        <div class="<?php echo e($random[$randomIndex++]); ?> form-group">
            <input type="search" name="search-field" class="<?php echo e($random[$randomIndex++]); ?> form-control" placeholder="Search Here..." required>
            <button type="submit">
                <i class="<?php echo e($random[$randomIndex++]); ?> far fa-search"></i>
            </button>
        </div>
    </form>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/header.blade.php ENDPATH**/ ?>