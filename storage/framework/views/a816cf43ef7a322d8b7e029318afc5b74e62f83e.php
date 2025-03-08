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
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>地址</h5>
                                <p><?php echo e($information->address); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>电话</h5>
                                <p>+<?php echo e($information->phone); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>邮箱</h5>
                                <p>
                                    <a href="mailto:<?php echo e($information->email); ?>" class="__cf_email__" ><?php echo e($information->email); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-alarm-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>上班时间</h5>
                                <p>周一至周六（上午10:00至下午5:30）</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="contact-img">
                            <img class="lozad" data-src="<?php echo e(asset('assets/img/contact/01.jpg')); ?>">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2><?php echo e($information->freequote[0]['title']); ?></h2>
                                <p><?php echo e($information->freequote[0]['subtitle']); ?></p>
                            </div>
                            <form method="post" action="<?php echo e(url('/')); ?>" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="far fa-user-tie"></i>
                                                    </span>
                                            <input type="text" class="form-control" name="name" placeholder="姓名" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="far fa-envelope"></i>
                                                    </span>
                                            <input type="email" class="form-control" name="email" placeholder="邮箱" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="far fa-pen"></i>
                                            </span>
                                    <input type="text" class="form-control" name="subject" placeholder="主题" required>
                                </div>
                                <div class="input-group textarea">
                                            <span class="input-group-text">
                                                <i class="far fa-comment-lines"></i>
                                            </span>
                                    <textarea name="message" cols="30" rows="5" class="form-control" placeholder="内容"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">发送<i class="far fa-paper-plane"></i>
                                </button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
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
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/contact.blade.php ENDPATH**/ ?>