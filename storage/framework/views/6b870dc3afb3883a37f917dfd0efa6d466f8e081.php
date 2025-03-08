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
    <div class="service-area bg py-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/tax-planning.svg')); ?>" alt="<?php echo e($information->service[0]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[0]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[0]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/tax-2.svg')); ?>" alt="<?php echo e($information->service[1]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[1]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[1]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/tax-3.svg')); ?>" alt="<?php echo e($information->service[2]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[2]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[2]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/tax-4.svg')); ?>" alt="<?php echo e($information->service[3]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[3]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[3]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/audit.svg')); ?>" alt="<?php echo e($information->service[4]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[4]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[4]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/investment.svg')); ?>" alt="<?php echo e($information->service[5]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[5]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[5]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/tax-6.svg')); ?>" alt="<?php echo e($information->service[6]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[6]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[6]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="service-shape">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/shape/07.png')); ?>">
                        </div>
                        <div class="service-icon">
                            <img src="<?php echo e(asset('assets/img/icon/tax-5.svg')); ?>" alt="<?php echo e($information->service[7]['name']); ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><?php echo e($information->service[7]['name']); ?></h3>
                            <p class="service-text">
                                <?php echo e($information->service[7]['text']); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-area lozad" data-bg-image="<?php echo e(asset('assets/img/cta/01.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="cta-content wow fadeInUp" data-wow-delay=".25s">
                        <h2 style="color: white">通过专家咨询最大限度地发挥您的潜力</h2>
                        <a href="<?php echo e(url($menus[6]['link'])); ?>" class="theme-btn"><?php echo e($menus[6]['link_name']); ?><i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                        <div class="site-heading mb-0">
                                    <span class="site-title-tagline">
                                        <i class="fas fa-percent"></i> Why Choose Us
                                    </span>
                            <h2 class="site-title"><?php echo e($information->advantage[0]['title']); ?></h2>
                        </div>
                        <div class="choose-content-wrap">
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <img src="<?php echo e(asset('assets/img/icon/money.svg')); ?>" alt="<?php echo e($information->advantage[1]['name']); ?>">
                                </div>
                                <div class="choose-item-info">
                                    <h4><?php echo e($information->advantage[1]['name']); ?></h4>
                                    <p><?php echo e($information->advantage[1]['text']); ?></p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <img src="<?php echo e(asset('assets/img/icon/investment.svg')); ?>" alt="<?php echo e($information->advantage[2]['name']); ?>">
                                </div>
                                <div class="choose-item-info">
                                    <h4><?php echo e($information->advantage[2]['name']); ?></h4>
                                    <p><?php echo e($information->advantage[2]['text']); ?></p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <img src="<?php echo e(asset('assets/img/icon/money-2.svg')); ?>" alt="<?php echo e($information->advantage[3]['name']); ?>">
                                </div>
                                <div class="choose-item-info">
                                    <h4><?php echo e($information->advantage[3]['name']); ?></h4>
                                    <p><?php echo e($information->advantage[3]['text']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                        <img class="img-1 lozad" data-src="<?php echo e(asset('assets/img/choose/01.jpg')); ?>">
                        <img class="img-2 lozad" data-src="<?php echo e(asset('assets/img/choose/02.jpg')); ?>">
                        <img class="img-shape lozad" data-src="<?php echo e(asset('assets/img/shape/10.png')); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-area bg py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="site-heading wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline light">
                                    <i class="fas fa-percent"></i> Testimonials
                                </span>
                        <h2 class="site-title"><?php echo e($information->testimonial[0]['title']); ?></h2>
                        <a href="<?php echo e(url($menus[2]['link'])); ?>" class="theme-btn mt-30"><?php echo e($menus[2]['link_name']); ?><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                        <?php for($i=1; $i<=4; $i++): ?>
                            <div class="testimonial-item">
                                <div class="testimonial-quote">
                                        <span class="testimonial-quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </span>
                                    <p>
                                        <?php echo e($information->testimonial[$i]['text']); ?>

                                    </p>
                                </div>
                                <div class="testimonial-content">
                                    <div class="testimonial-author-img">
                                        <img class="lozad" data-src="<?php echo e(asset($information->testimonial[$i]['image'])); ?>" alt="<?php echo e($information->testimonial[$i]['name']); ?>">
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4><?php echo e($information->testimonial[$i]['name']); ?></h4>
                                        <div class="testimonial-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-right wow fadeInUp" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                        <span class="site-title-tagline">
                            <i class="fas fa-percent"></i> Faq's
                        </span>
                            <h2 class="site-title my-3"><?php echo e($information->faq[0]['title']); ?></h2>
                        </div>
                        <p class="mb-3"><?php echo e($information->faq[0]['subtitle']); ?></p>
                        <a href="<?php echo e(url($menus[5]['link'])); ?>" class="theme-btn mt-2"><?php echo e($menus[5]['link_name']); ?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>
                                    <i class="far fa-question"></i>
                                </span> <?php echo e($information->faq[1]['name']); ?>

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo e($information->faq[1]['text']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>
                                    <i class="far fa-question"></i>
                                </span> <?php echo e($information->faq[2]['name']); ?>

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo e($information->faq[2]['text']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>
                                    <i class="far fa-question"></i>
                                </span> <?php echo e($information->faq[3]['name']); ?>

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo e($information->faq[3]['text']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>
                                    <i class="far fa-question"></i>
                                </span> <?php echo e($information->faq[4]['name']); ?>

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo e($information->faq[4]['text']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/service.blade.php ENDPATH**/ ?>