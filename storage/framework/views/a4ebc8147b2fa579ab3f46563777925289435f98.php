<div class="footer-middle pt-95 lozad" data-bg-image="<?php echo e(asset('assets/images/call-bg.png')); ?>"">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widgets-company-info">
                <div class="footer-bottom-logo pb-40">
                    <img class="lozad" data-src="<?php echo e(asset($information->logo)); ?>" alt="<?php echo e($information->title); ?>" />
                </div>
                <div class="company-info-desc">
                    <p>
                        <?php echo e(mb_substr(strip_tags($information->description), 0, 100) . '...'); ?>

                    </p>
                </div>
                <div class="follow-company-info pt-3">
                    <div class="follow-company-text mr-3">
                        <a href="<?php echo e(url('/')); ?>">
                            <p>找到我们</p>
                        </a>
                    </div>
                    <div class="follow-company-icon">
                        <a href="<?php echo e(url('/')); ?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="<?php echo e(url('/')); ?>">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="<?php echo e(url('/')); ?>">
                            <i class="fa fa-skype"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widget-nav-menu">
                <h4 class="widget-title pb-4">导航</h4>
                <div class="menu-quick-link-container ml-4">
                    <ul id="menu-quick-link" class="menu">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($v->id != 1): ?>
                                <li>
                                    <a href="<?php echo e(url($v->link)); ?>"><?php echo e($v->name); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget widgets-company-info">
                <h3 class="widget-title pb-4">联系方式</h3>
                <div class="footer-social-info">
                    <p>
                        <span>地址 :</span><?php echo e($information->address); ?>

                    </p>
                </div>
                <div class="footer-social-info">
                    <p>
                        <span>电话 :</span><?php echo e($information->phone); ?>

                    </p>
                </div>
                <div class="footer-social-info">
                    <p>
                        <span>邮箱 :</span><?php echo e($information->email); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer-bottom mt-70 pt-3 pb-1">
        <div class="col-lg-6 col-md-6">
            <div class="footer-bottom-content">
                <div class="footer-bottom-content-copy">
                    <p>© <?php echo e(date('Y')); ?> - 版权所有 <a href="<?php echo e(url('/')); ?>"><?php echo e($information->title); ?></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="footer-bottom-right">
                <div class="footer-bottom-right-text">
                    <a href="<?php echo e(url('/sitemap.xml')); ?>">SiteMap</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo e(asset('assets/js/vendor/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/waypoints.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/wow.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/venobox/venobox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/ajax-mail.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/testimonial.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/animated-text.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/venobox/venobox.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.nivo.slider.pack.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.meanmenu.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.scrollUp.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
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
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/footer/1.blade.php ENDPATH**/ ?>