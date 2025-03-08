<footer class="{{ $random[$randomIndex++] }} footer-area">
    <div class="{{ $random[$randomIndex++] }} footer-shape">
        <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/03.png') }}" alt="footer">
    </div>
    <div class="{{ $random[$randomIndex++] }} footer-widget">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} footer-widget-wrap pt-100 pb-70">
                <div class="{{ $random[$randomIndex++] }} row g-5">
                    <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-5">
                        <div class="{{ $random[$randomIndex++] }} footer-widget-box about-us">
                            <a href="{{ url('/') }}" class="{{ $random[$randomIndex++] }} footer-logo">
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset($information->logo) }}" alt="{{ $information->title }}">
                            </a>
                            <p class="{{ $random[$randomIndex++] }} mb-4">
                                {{ $information->description }}
                            </p>
                            <div class="{{ $random[$randomIndex++] }} footer-newsletter">
                                <h6>邮箱订阅</h6>
                                <div class="{{ $random[$randomIndex++] }} subscribe-form">
                                    <form action="{{ url('/') }}">
                                        <div class="{{ $random[$randomIndex++] }} form-group">
                                            <input type="email" class="{{ $random[$randomIndex++] }} form-control" placeholder="邮箱地址">
                                            <button class="{{ $random[$randomIndex++] }} theme-btn" type="submit">
                                                Subscribe <i class="{{ $random[$randomIndex++] }} far fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-6 col-md-6 col-lg-2">
                        <div class="{{ $random[$randomIndex++] }} footer-widget-box list">
                            <h4 class="{{ $random[$randomIndex++] }} footer-widget-title">导航</h4>
                            <ul class="{{ $random[$randomIndex++] }} footer-list">
                                @foreach($menus as $v)
                                    @if($v->id !=1)
                                        <li>
                                            <a href="{{ url($v->link) }}">
                                                <i class="{{ $random[$randomIndex++] }} far fa-arrow-right"></i>{{ $v->name }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-6 col-md-6 col-lg-2">
                        <div class="{{ $random[$randomIndex++] }} footer-widget-box list">
                            <h4 class="{{ $random[$randomIndex++] }} footer-widget-title">网站地图</h4>
                            <ul class="{{ $random[$randomIndex++] }} footer-list">
                                <li>
                                    <a href="{{ url('/sitemap.xml') }}">
                                        <i class="{{ $random[$randomIndex++] }} far fa-arrow-right"></i>SiteMap
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                        <div class="{{ $random[$randomIndex++] }} footer-widget-box">
                            <h4 class="{{ $random[$randomIndex++] }} footer-widget-title">找到我们</h4>
                            <ul class="{{ $random[$randomIndex++] }} footer-contact">
                                <li>
                                    <div class="{{ $random[$randomIndex++] }} icon">
                                        <i class="{{ $random[$randomIndex++] }} far fa-location-dot"></i>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} content">
                                        <h6>地址</h6>
                                        <p>{{ $information->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="{{ $random[$randomIndex++] }} icon">
                                        <i class="{{ $random[$randomIndex++] }} far fa-phone"></i>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} content">
                                        <h6>电话</h6>
                                        <a href="tel:{{ $information->phone }}">+{{ $information->phone }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="{{ $random[$randomIndex++] }} icon">
                                        <i class="{{ $random[$randomIndex++] }} far fa-envelope"></i>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} content">
                                        <h6>邮箱</h6>
                                        <a href="mailto:{{ $information->email }}">
                                            <span class="{{ $random[$randomIndex++] }} __cf_email__" >{{ $information->email }}</span>
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
    <div class="{{ $random[$randomIndex++] }} container">
        <div class="{{ $random[$randomIndex++] }} copyright">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-md-6 align-self-center">
                    <p class="{{ $random[$randomIndex++] }} copyright-text">
                        © {{ date('Y') }} - 版权所有 <a href="{{ url('/') }}">{!! $information->title !!}</a>
                    </p>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 align-self-center">
                    <ul class="{{ $random[$randomIndex++] }} footer-social">
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="{{ $random[$randomIndex++] }} fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="{{ $random[$randomIndex++] }} fab fa-x-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="{{ $random[$randomIndex++] }} fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="{{ $random[$randomIndex++] }} fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="scroll-top">
    <i class="{{ $random[$randomIndex++] }} far fa-arrow-up"></i>
</a>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/counter-up.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
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
