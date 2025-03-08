@include('meta')
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="{{ $random[$randomIndex++] }} home-2">
@include('header')
<main class="{{ $random[$randomIndex++] }} main">
    <div class="{{ $random[$randomIndex++] }} site-breadcrumb lozad" data-bg-image="{{ asset($menu_page['banner']) }}">
        <div class="{{ $random[$randomIndex++] }} container">
            <h2 class="{{ $random[$randomIndex++] }} breadcrumb-title">{{ $menu_page['name'] }}</h2>
            <ul class="{{ $random[$randomIndex++] }} breadcrumb-menu">
                <li>
                    <a href="{{ url('/') }}">{{ $menus[1]->name }}</a>
                </li>
                <li class="{{ $random[$randomIndex++] }} active">{{ $menu_page['name'] }}</li>
            </ul>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} service-area bg py-120">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row g-4">
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/tax-planning.svg') }}" alt="{{ $information->service[0]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[0]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[0]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/tax-2.svg') }}" alt="{{ $information->service[1]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[1]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[1]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/tax-3.svg') }}" alt="{{ $information->service[2]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[2]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[2]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/tax-4.svg') }}" alt="{{ $information->service[3]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[3]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[3]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/audit.svg') }}" alt="{{ $information->service[4]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[4]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[4]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/investment.svg') }}" alt="{{ $information->service[5]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[5]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[5]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/tax-6.svg') }}" alt="{{ $information->service[6]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[6]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[6]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} service-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} service-shape">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/07.png') }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-icon">
                            <img src="{{ asset('assets/img/icon/tax-5.svg') }}" alt="{{ $information->service[7]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} service-content">
                            <h3 class="{{ $random[$randomIndex++] }} service-title">{{ $information->service[7]['name'] }}</h3>
                            <p class="{{ $random[$randomIndex++] }} service-text">
                                {{ $information->service[7]['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} cta-area lozad" data-bg-image="{{ asset('assets/img/cta/01.jpg') }}">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto">
                    <div class="{{ $random[$randomIndex++] }} cta-content wow fadeInUp" data-wow-delay=".25s">
                        <h2 style="color: white">通过专家咨询最大限度地发挥您的潜力</h2>
                        <a href="{{ url($menus[6]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn">{{ $menus[6]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} choose-area py-100">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} choose-content wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} site-heading mb-0">
                                    <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                                        <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> Why Choose Us
                                    </span>
                            <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $information->advantage[0]['title'] }}</h2>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} choose-content-wrap">
                            <div class="{{ $random[$randomIndex++] }} choose-item">
                                <div class="{{ $random[$randomIndex++] }} choose-item-icon">
                                    <img src="{{ asset('assets/img/icon/money.svg') }}" alt="{{ $information->advantage[1]['name'] }}">
                                </div>
                                <div class="{{ $random[$randomIndex++] }} choose-item-info">
                                    <h4>{{ $information->advantage[1]['name'] }}</h4>
                                    <p>{{ $information->advantage[1]['text'] }}</p>
                                </div>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} choose-item">
                                <div class="{{ $random[$randomIndex++] }} choose-item-icon">
                                    <img src="{{ asset('assets/img/icon/investment.svg') }}" alt="{{ $information->advantage[2]['name'] }}">
                                </div>
                                <div class="{{ $random[$randomIndex++] }} choose-item-info">
                                    <h4>{{ $information->advantage[2]['name'] }}</h4>
                                    <p>{{ $information->advantage[2]['text'] }}</p>
                                </div>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} choose-item">
                                <div class="{{ $random[$randomIndex++] }} choose-item-icon">
                                    <img src="{{ asset('assets/img/icon/money-2.svg') }}" alt="{{ $information->advantage[3]['name'] }}">
                                </div>
                                <div class="{{ $random[$randomIndex++] }} choose-item-info">
                                    <h4>{{ $information->advantage[3]['name'] }}</h4>
                                    <p>{{ $information->advantage[3]['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} choose-img wow fadeInRight" data-wow-delay=".25s">
                        <img class="{{ $random[$randomIndex++] }} img-1 lozad" data-src="{{ asset('assets/img/choose/01.jpg') }}">
                        <img class="{{ $random[$randomIndex++] }} img-2 lozad" data-src="{{ asset('assets/img/choose/02.jpg') }}">
                        <img class="{{ $random[$randomIndex++] }} img-shape lozad" data-src="{{ asset('assets/img/shape/10.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} testimonial-area bg py-80">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-4">
                    <div class="{{ $random[$randomIndex++] }} site-heading wow fadeInDown" data-wow-delay=".25s">
                                <span class="{{ $random[$randomIndex++] }} site-title-tagline light">
                                    <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> Testimonials
                                </span>
                        <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $information->testimonial[0]['title'] }}</h2>
                        <a href="{{ url($menus[2]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn mt-30">{{ $menus[2]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-lg-8">
                    <div class="{{ $random[$randomIndex++] }} testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                        @for($i=1; $i<=4; $i++)
                            <div class="{{ $random[$randomIndex++] }} testimonial-item">
                                <div class="{{ $random[$randomIndex++] }} testimonial-quote">
                                        <span class="{{ $random[$randomIndex++] }} testimonial-quote-icon">
                                            <i class="{{ $random[$randomIndex++] }} fal fa-quote-right"></i>
                                        </span>
                                    <p>
                                        {{ $information->testimonial[$i]['text'] }}
                                    </p>
                                </div>
                                <div class="{{ $random[$randomIndex++] }} testimonial-content">
                                    <div class="{{ $random[$randomIndex++] }} testimonial-author-img">
                                        <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset($information->testimonial[$i]['image']) }}" alt="{{ $information->testimonial[$i]['name'] }}">
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} testimonial-author-info">
                                        <h4>{{ $information->testimonial[$i]['name'] }}</h4>
                                        <div class="{{ $random[$randomIndex++] }} testimonial-rate">
                                            <i class="{{ $random[$randomIndex++] }} fas fa-star"></i>
                                            <i class="{{ $random[$randomIndex++] }} fas fa-star"></i>
                                            <i class="{{ $random[$randomIndex++] }} fas fa-star"></i>
                                            <i class="{{ $random[$randomIndex++] }} fas fa-star"></i>
                                            <i class="{{ $random[$randomIndex++] }} fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} faq-area py-120">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} faq-right wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} site-heading mb-3">
                        <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                            <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> Faq's
                        </span>
                            <h2 class="{{ $random[$randomIndex++] }} site-title my-3">{{ $information->faq[0]['title'] }}</h2>
                        </div>
                        <p class="{{ $random[$randomIndex++] }} mb-3">{{ $information->faq[0]['subtitle'] }}</p>
                        <a href="{{ url($menus[5]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn mt-2">{{ $menus[5]['link_name'] }}</a>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                        <div class="{{ $random[$randomIndex++] }} accordion-item">
                            <h2 class="{{ $random[$randomIndex++] }} accordion-header" id="headingOne">
                                <button class="{{ $random[$randomIndex++] }} accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>
                                    <i class="{{ $random[$randomIndex++] }} far fa-question"></i>
                                </span> {{ $information->faq[1]['name'] }}
                                </button>
                            </h2>
                            <div id="collapseOne" class="{{ $random[$randomIndex++] }} accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="{{ $random[$randomIndex++] }} accordion-body">
                                    {{ $information->faq[1]['text'] }}
                                </div>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} accordion-item">
                            <h2 class="{{ $random[$randomIndex++] }} accordion-header" id="headingTwo">
                                <button class="{{ $random[$randomIndex++] }} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>
                                    <i class="{{ $random[$randomIndex++] }} far fa-question"></i>
                                </span> {{ $information->faq[2]['name'] }}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="{{ $random[$randomIndex++] }} accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="{{ $random[$randomIndex++] }} accordion-body">
                                    {{ $information->faq[2]['text'] }}
                                </div>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} accordion-item">
                            <h2 class="{{ $random[$randomIndex++] }} accordion-header" id="headingThree">
                                <button class="{{ $random[$randomIndex++] }} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>
                                    <i class="{{ $random[$randomIndex++] }} far fa-question"></i>
                                </span> {{ $information->faq[3]['name'] }}
                                </button>
                            </h2>
                            <div id="collapseThree" class="{{ $random[$randomIndex++] }} accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="{{ $random[$randomIndex++] }} accordion-body">
                                    {{ $information->faq[3]['text'] }}
                                </div>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} accordion-item">
                            <h2 class="{{ $random[$randomIndex++] }} accordion-header" id="headingFour">
                                <button class="{{ $random[$randomIndex++] }} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>
                                    <i class="{{ $random[$randomIndex++] }} far fa-question"></i>
                                </span> {{ $information->faq[4]['name'] }}
                                </button>
                            </h2>
                            <div id="collapseFour" class="{{ $random[$randomIndex++] }} accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="{{ $random[$randomIndex++] }} accordion-body">
                                    {{ $information->faq[4]['text'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')
</body>
</html>
