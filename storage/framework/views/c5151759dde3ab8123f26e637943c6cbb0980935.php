<?php echo $__env->make('meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/all-fontawesome.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>
<body class="home-2">
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main class="main">
    <div class="site-breadcrumb lozad" data-bg-image="<?php echo e(asset($menu_page['banner'])); ?>">
        <div class="container">
            <h2 class="breadcrumb-title"><?php echo e($menu_page['name']); ?></h2>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="<?php echo e(url('/')); ?>"><?php echo e($menus[1]->name); ?></a>
                </li>
                <li class="active"><?php echo e($menu_page['name']); ?></li>
            </ul>
        </div>
    </div>
    <div class="blog-single py-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-single-wrapper">
                        <div class="blog-single-content">
                            <div class="blog-info">
                                <h3 class="blog-details-title mb-20"><?php echo e($article->title); ?></h3>
                                <div class="blog-meta">
                                    <div class="blog-meta-left">
                                        <ul>
                                            <li><i class="fas fa-clock"></i>  <?php echo e(date('Y-m-d', strtotime($article->datatime))); ?></li>
                                            <li><i class="far fa-thumbs-up"></i><?php echo e($article->click); ?></li>
                                        </ul>
                                    </div>
                                    <div class="blog-meta-right">
                                        <a href="<?php echo e(request()->url()); ?>" class="share-link"><i class="far fa-share-alt"></i>分享</a>
                                    </div>
                                </div>
                                <div class="blog-details">
                                    <?php echo $article->content; ?>

                                </div>
                                <div class="d-flex justify-content-between mt-20">
                                    <?php if(isset($prev->link)): ?>
                                        <a href="<?php echo e(url($prev->link)); ?>">上一篇</a>
                                    <?php endif; ?>
                                    <?php if(isset($next->link)): ?>
                                        <a href="<?php echo e(url($next->link)); ?>">下一篇</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget search">
                            <h5 class="widget-title">搜索</h5>
                            <form class="search-form">
                                <input type="text" class="form-control" placeholder="Search Here...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget category">
                            <h5 class="widget-title">导航</h5>
                            <div class="category-list">
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($v->id != 1): ?>
                                <a href="<?php echo e(url($v->link)); ?>"><i class="far fa-arrow-right"></i><?php echo e($v->name); ?></a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="widget recent-post">
                            <h5 class="widget-title">推荐文章</h5>
                            <?php $__currentLoopData = $menu_article->where('recommend', 1)->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="recent-post-single">
                                <div class="recent-post-img">
                                    <img class="lozad" data-src="<?php echo e(asset($v->image)); ?>" alt="<?php echo e($v->title); ?>">
                                </div>
                                <div class="recent-post-bio">
                                    <h6><a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->title); ?></a></h6>
                                    <span><i class="far fa-clock"></i><?php echo e(date('Y-m-d', strtotime($v->datatime))); ?></span>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/article.blade.php ENDPATH**/ ?>