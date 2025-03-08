<footer class="<?php echo e($random[$randomIndex++]); ?> footer-area">
    <div class="<?php echo e($random[$randomIndex++]); ?> footer-shape">
        <img class="<?php echo e($random[$randomIndex++]); ?> lozad" data-src="<?php echo e(asset('assets/img/shape/03.png')); ?>" alt="footer">
    </div>
    <div class="<?php echo e($random[$randomIndex++]); ?> footer-widget">
        <div class="<?php echo e($random[$randomIndex++]); ?> container">
            <div class="<?php echo e($random[$randomIndex++]); ?> footer-widget-wrap pt-100 pb-70">
                <div class="<?php echo e($random[$randomIndex++]); ?> row g-5">
                    <div class="<?php echo e($random[$randomIndex++]); ?> col-md-6 col-lg-5">
                        <div class="<?php echo e($random[$randomIndex++]); ?> footer-widget-box about-us">
                            <a href="<?php echo e(url('/')); ?>" class="<?php echo e($random[$randomIndex++]); ?> footer-logo">
                                <img class="<?php echo e($random[$randomIndex++]); ?> lozad" data-src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>">
                            </a>
                            <p class="<?php echo e($random[$randomIndex++]); ?> mb-4">
                                <?php echo e($information->description); ?>

                            </p>
                            <div class="<?php echo e($random[$randomIndex++]); ?> footer-newsletter">
                                <h6>邮箱订阅</h6>
                                <div class="<?php echo e($random[$randomIndex++]); ?> subscribe-form">
                                    <form action="<?php echo e(url('/')); ?>">
                                        <div class="<?php echo e($random[$randomIndex++]); ?> form-group">
                                            <input type="email" class="<?php echo e($random[$randomIndex++]); ?> form-control" placeholder="邮箱地址">
                                            <button class="<?php echo e($random[$randomIndex++]); ?> theme-btn" type="submit">
                                                Subscribe <i class="<?php echo e($random[$randomIndex++]); ?> far fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="<?php echo e($random[$randomIndex++]); ?> col-6 col-md-6 col-lg-2">
                        <div class="<?php echo e($random[$randomIndex++]); ?> footer-widget-box list">
                            <h4 class="<?php echo e($random[$randomIndex++]); ?> footer-widget-title">导航</h4>
                            <ul class="<?php echo e($random[$randomIndex++]); ?> footer-list">
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($v->id !=1): ?>
                                        <li>
                                            <a href="<?php echo e(url($v->link)); ?>">
                                                <i class="<?php echo e($random[$randomIndex++]); ?> far fa-arrow-right"></i><?php echo e($v->name); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="<?php echo e($random[$randomIndex++]); ?> col-6 col-md-6 col-lg-2">
                        <div class="<?php echo e($random[$randomIndex++]); ?> footer-widget-box list">
                            <h4 class="<?php echo e($random[$randomIndex++]); ?> footer-widget-title">网站地图</h4>
                            <ul class="<?php echo e($random[$randomIndex++]); ?> footer-list">
                                <li>
                                    <a href="<?php echo e(url('/sitemap.xml')); ?>">
                                        <i class="<?php echo e($random[$randomIndex++]); ?> far fa-arrow-right"></i>SiteMap
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="<?php echo e($random[$randomIndex++]); ?> col-md-6 col-lg-3">
                        <div class="<?php echo e($random[$randomIndex++]); ?> footer-widget-box">
                            <h4 class="<?php echo e($random[$randomIndex++]); ?> footer-widget-title">找到我们</h4>
                            <ul class="<?php echo e($random[$randomIndex++]); ?> footer-contact">
                                <li>
                                    <div class="<?php echo e($random[$randomIndex++]); ?> icon">
                                        <i class="<?php echo e($random[$randomIndex++]); ?> far fa-location-dot"></i>
                                    </div>
                                    <div class="<?php echo e($random[$randomIndex++]); ?> content">
                                        <h6>地址</h6>
                                        <p><?php echo e($information->address); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="<?php echo e($random[$randomIndex++]); ?> icon">
                                        <i class="<?php echo e($random[$randomIndex++]); ?> far fa-phone"></i>
                                    </div>
                                    <div class="<?php echo e($random[$randomIndex++]); ?> content">
                                        <h6>电话</h6>
                                        <a href="tel:<?php echo e($information->phone); ?>">+<?php echo e($information->phone); ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="<?php echo e($random[$randomIndex++]); ?> icon">
                                        <i class="<?php echo e($random[$randomIndex++]); ?> far fa-envelope"></i>
                                    </div>
                                    <div class="<?php echo e($random[$randomIndex++]); ?> content">
                                        <h6>邮箱</h6>
                                        <a href="mailto:<?php echo e($information->email); ?>">
                                            <span class="<?php echo e($random[$randomIndex++]); ?> __cf_email__" ><?php echo e($information->email); ?></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="<?php echo e($random[$randomIndex++]); ?> container">
        <div class="<?php echo e($random[$randomIndex++]); ?> copyright">
            <div class="<?php echo e($random[$randomIndex++]); ?> row">
                <div class="<?php echo e($random[$randomIndex++]); ?> col-md-6 align-self-center">
                    <p class="<?php echo e($random[$randomIndex++]); ?> copyright-text">
                        © <?php echo e(date('Y')); ?> - 版权所有 <a href="<?php echo e(url('/')); ?>"><?php echo $information->title; ?></a>
                    </p>
                </div>
                <div class="<?php echo e($random[$randomIndex++]); ?> col-md-6 align-self-center">
                    <ul class="<?php echo e($random[$randomIndex++]); ?> footer-social">
                        <li>
                            <a href="<?php echo e(url('/')); ?>">
                                <i class="<?php echo e($random[$randomIndex++]); ?> fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/')); ?>">
                                <i class="<?php echo e($random[$randomIndex++]); ?> fab fa-x-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/')); ?>">
                                <i class="<?php echo e($random[$randomIndex++]); ?> fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/')); ?>">
                                <i class="<?php echo e($random[$randomIndex++]); ?> fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="scroll-top">
    <i class="<?php echo e($random[$randomIndex++]); ?> far fa-arrow-up"></i>
</a>
<script src="<?php echo e(asset('assets/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/modernizr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.appear.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter-up.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script>
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
</script>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/footer.blade.php ENDPATH**/ ?>