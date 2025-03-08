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
    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                    <span class="site-title-tagline">
                        <i class="fas fa-percent"></i> <?php echo e($menu_page['subtitle']); ?>

                    </span>
                        <h2 class="site-title"><?php echo e($menu_page['name']); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row g-4" id="content_masonry">
                <?php $__currentLoopData = $list_article->take(9); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s" >
                        <div class="blog-item-img">
                            <img class="lozad" data-src="<?php echo e(asset($v->image)); ?>" alt="<?php echo e($v->title); ?>">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  <?php echo e(date('Y-m-d', strtotime($v->datatime))); ?></li>
                                    <li>
                                         <i class="far fa-thumbs-up"></i> <?php echo e($v->click); ?>

                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->title); ?></a>
                            </h4>
                            <p>
                                <?php echo e(mb_substr(strip_tags($v->content), 0, 100) . '...'); ?>

                            </p>
                            <a class="theme-btn" href="<?php echo e(url($v->link)); ?>">查看<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="<?php echo e($random[$randomIndex++]); ?> jl-loadmore-btn-w" data-link="<?php echo e(url('/api/' . $menu_page->link)); ?>">
                <div class="<?php echo e($random[$randomIndex++]); ?> jl_btn_load">查看更多</div>
            </div>
        </div>
    </div>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    function toggleDropdown() {
        document.getElementById("mainMenu").classList.toggle("show");
    }
    const tabButtons = document.querySelectorAll('.tab_button');
    const tabContents = document.querySelectorAll('.tab_content');
    tabButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            button.classList.add('active');
            tabContents[index].classList.add('active');
        });
    });
    const tabNavs = document.querySelectorAll('.tab-header span');
    const tabContents2 = document.querySelectorAll('.tab-content');
    tabNavs.forEach((nav, index) => {
        nav.addEventListener('click', () => {
            tabNavs.forEach(n => n.classList.remove('active'));
            tabContents2.forEach(c => c.classList.remove('active'));
            nav.classList.add('active');
            tabContents2[index].classList.add('active');
        });
    });
    const backToTopBtn = document.getElementById('back-to-top');
    window.addEventListener('scroll', function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });
    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    document.addEventListener('contextmenu', (event) => {
        event.preventDefault();
    });
    document.addEventListener('keydown', (event) => {
        if (event.key === 'F12') {
            event.preventDefault();
        }
    });
    document.addEventListener('contextmenu', (event) => {
        event.preventDefault();
    });
    document.addEventListener('devtoolschange', (event) => {
        if (event.detail.open) {
            window.location.reload();
        }
    });
    document.addEventListener('keydown', (event) => {
        if (event.ctrlKey && event.key.toLowerCase() === 'u') {
            event.preventDefault();
        }
    });
</script>
<script>
    $(document).ready(function() {
        var currentPage = 1;
        $('.jl_btn_load').click(function(e) {
            e.preventDefault();
            currentPage++;
            var apiUrl = $('.jl-loadmore-btn-w').data('link') + '?page=' + currentPage;
            $.ajax({
                url: apiUrl,
                type: 'GET',
                success: function(response) {
                    response.data.forEach(function(article) {
                        var articleHtml = `<div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s" >
                        <div class="blog-item-img">
                            <img class="lozad" data-src="${article.image}" alt="${article.title}">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  <?php echo e(date('Y-m-d', strtotime($v->datatime))); ?></li>
                                    <li>
                                         <i class="far fa-thumbs-up"></i> ${article.click}
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="${article.link}">${article.title}</a>
                            </h4>
                            <p>
                                <?php echo e(mb_substr(strip_tags($v->content), 0, 100) . '...'); ?>

                        </p>
                        <a class="theme-btn" href="${article.link}">查看<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>`;
                        $('#content_masonry').append(articleHtml);
                    });
                    const observer = lozad('.lozad', {
                        loaded: function(el) {
                            if (!el.classList.contains('lozad')) {
                                el.classList.add('lozad');
                            }
                            el.style.filter = 'none';
                            el.style.opacity = '1';
                            const backgroundImage = el.getAttribute('data-bg-image');
                            if (backgroundImage) {
                                el.style.backgroundImage = `url(${backgroundImage})`;
                            }
                            if (el.tagName.toLowerCase() === 'img') {
                            }
                        }
                    });
                    observer.observe();
                    if (!response.next_page_url) {
                        $('.jl-loadmore-btn-w').hide();
                    } else {
                        $('#content').append($('.jl-loadmore-btn-w'));
                    }
                },
                error: function() {
                    alert('Error loading more articles.');
                }
            });
        });
    });
</script>
</body>
</html>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/news.blade.php ENDPATH**/ ?>