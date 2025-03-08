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
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <img class="img-1 lozad" data-src="<?php echo e($information->about[0]['image']); ?>" alt="<?php echo e($menus[2]->name); ?>">
                            <div class="about-img-shape">
                                <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/06.png')); ?>">
                            </div>
                        </div>
                        <div class="about-experience">
                            <span>30</span>
                            <h5>Years Of
                                <br> Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                                    <span class="site-title-tagline">
                                        <i class="fas fa-percent"></i> <?php echo e($menus[2]['subtitle']); ?>

                                    </span>
                            <h2 class="site-title">
                                <?php echo e($menus[2]['name']); ?>

                            </h2>
                        </div>
                        <p class="about-text"><?php echo $information->about[0]['text']; ?></p>
                        <a href="<?php echo e(url($menus[2]['link'])); ?>" class="theme-btn"><?php echo e($menus[2]['link_name']); ?><i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-area">
        <div class="container-fluid px-0">
            <div class="video-content">
                <a class="play-btn popup-youtube" href="<?php echo e(url('/')); ?>">
                    <i class="fas fa-play"></i>
                </a>
                <div class="video-img lozad" data-bg-image="<?php echo e(asset('assets/img/video/01.jpg')); ?>">
                    <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay=".25s">
                        <div class="video-info">
                            <h2 style="color: white">我们提供专业知识，帮助您的企业成长</h2><br>
                            <a href="<?php echo e(url($menus[6]['link'])); ?>" class="theme-btn"><?php echo e($menus[6]['link_name']); ?><i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="process-area">
        <div class="container">
            <div class="process-wrap pt-50 pb-50">
                <div class="process-shape">
                    <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/09.png')); ?>">
                </div>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                    <span class="site-title-tagline light">
                                        <i class="fas fa-percent"></i> Working Process
                                    </span>
                            <h2 class="site-title"><?php echo e($information->workflow[0]['title']); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-between wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="process-item">
                            <div class="icon">
                                <span>01</span>
                                <img class="lozad" data-src="<?php echo e(asset('assets/img/process/01.jpg')); ?>" alt="<?php echo e($information->workflow[1]['name']); ?>">
                            </div>
                            <h4><?php echo e($information->workflow[1]['name']); ?></h4>
                            <p><?php echo e($information->workflow[1]['text']); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="process-item">
                            <div class="icon">
                                <span>02</span>
                                <img class="lozad" data-src="<?php echo e(asset('assets/img/process/02.jpg')); ?>" alt="<?php echo e($information->workflow[2]['name']); ?>">
                            </div>
                            <h4><?php echo e($information->workflow[2]['name']); ?></h4>
                            <p><?php echo e($information->workflow[2]['text']); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="process-item">
                            <div class="icon">
                                <span>03</span>
                                <img class="lozad" data-src="assets/img/process/03.jpg" alt="<?php echo e($information->workflow[3]['name']); ?>">
                            </div>
                            <h4><?php echo e($information->workflow[3]['name']); ?></h4>
                            <p><?php echo e($information->workflow[3]['text']); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="process-item">
                            <div class="icon">
                                <span>04</span>
                                <img class="lozad" data-src="assets/img/process/04.jpg" alt="<?php echo e($information->workflow[4]['name']); ?>">
                            </div>
                            <h4><?php echo e($information->workflow[4]['name']); ?></h4>
                            <p><?php echo e($information->workflow[4]['text']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline">
                                    <i class="fas fa-percent"></i> Our Team
                                </span>
                        <h2 class="site-title"><?php echo e($information->team[0]['title']); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <?php for($i=1; $i<=4; $i++): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img class="lozad" data-src="<?php echo e(asset($information->team[$i]['image'])); ?>" alt="<?php echo e($information->team[$i]['name']); ?>">
                                <div class="team-social-wrap">
                                    <div class="team-social-btn">
                                        <button type="button">
                                            <i class="far fa-share-alt"></i>
                                        </button>
                                    </div>
                                    <div class="team-social">
                                        <a href="<?php echo e(url('/')); ?>">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?php echo e(url('/')); ?>">
                                            <i class="fab fa-x-twitter"></i>
                                        </a>
                                        <a href="<?php echo e(url('/')); ?>">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="<?php echo e(url('/')); ?>">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><?php echo e($information->team[$i]['name']); ?></h4>
                                <span><?php echo e($information->team[$i]['text']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/about.blade.php ENDPATH**/ ?>