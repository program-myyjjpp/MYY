@include('meta')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
@include('header')
<main class="{{ $random[$randomIndex++] }} main">
    <div class="{{ $random[$randomIndex++] }} hero-section hs-1">
        <div class="{{ $random[$randomIndex++] }} hero-single">
            <div class="{{ $random[$randomIndex++] }} hero-shape">
                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/02.png') }}">
            </div>
            <div class="{{ $random[$randomIndex++] }} container">
                <div class="{{ $random[$randomIndex++] }} row align-items-center">
                    <div class="{{ $random[$randomIndex++] }} col-md-12 col-lg-6">
                        <div class="{{ $random[$randomIndex++] }} hero-content">
                            <h2 class="{{ $random[$randomIndex++] }} hero-title">
                                {{ $information->banner[0]['title'] }}
                            </h2>
                            <p>
                                {{ $information->banner[0]['subtitle'] }}
                            </p>
                            <div class="{{ $random[$randomIndex++] }} hero-btn">
                                <a href="{{ url($menus[6]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn">{{ $menus[6]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                                </a>
                                <a href="{{ url($menus[5]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn theme-btn2">{{ $menus[5]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} partner-area pa-1 mt-50">
                            <div class="{{ $random[$randomIndex++] }} partner-content">
                                <h6>受到全球<span>300+</span>多家公司的信赖</h6>
                                <div class="{{ $random[$randomIndex++] }} row g-0">
                                    <div class="{{ $random[$randomIndex++] }} col">
                                        <div class="{{ $random[$randomIndex++] }} partner-item">
                                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/partner/01.png') }}">
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col">
                                        <div class="{{ $random[$randomIndex++] }} partner-item">
                                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/partner/02.png') }}">
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col">
                                        <div class="{{ $random[$randomIndex++] }} partner-item">
                                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/partner/03.png') }}">
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col">
                                        <div class="{{ $random[$randomIndex++] }} partner-item">
                                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/partner/04.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-md-12 col-lg-6">
                        <div class="{{ $random[$randomIndex++] }} hero-img-wrap">
                            <div class="{{ $random[$randomIndex++] }} hero-img">
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ $information->banner[0]['image'] }}" alt="{{ $information->banner[0]['title'] }}">
                            </div>
                            <div class="{{ $random[$randomIndex++] }} hero-img-shape">
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/01.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} counter-area pt-40 pb-40">
        <div class="{{ $random[$randomIndex++] }} counter-shape">
            <img class="{{ $random[$randomIndex++] }} img-1 lozad" data-src="{{ asset('assets/img/shape/04.png') }}" alt="">
            <img class="{{ $random[$randomIndex++] }} img-2 lozad" data-src="{{ asset('assets/img/shape/05.png') }}" alt="">
        </div>
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row g-4 justify-content-center">
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4 col-xl-3">
                    <div class="{{ $random[$randomIndex++] }} counter-box wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} icon">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/icon/tax.svg') }}" alt="{{ $information->honor[1]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} content">
                            <div class="{{ $random[$randomIndex++] }} info">
                                <span class="{{ $random[$randomIndex++] }} counter" data-count="+" data-to="150" data-speed="3000">150</span>
                                <span class="{{ $random[$randomIndex++] }} unit">k</span>
                            </div>
                            <h6 class="{{ $random[$randomIndex++] }} title">{{ $information->honor[1]['name'] }}</h6>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4 col-xl-3">
                    <div class="{{ $random[$randomIndex++] }} counter-box wow fadeInDown" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} icon">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/icon/rating.svg') }}" alt="{{ $information->honor[2]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} content">
                            <div class="{{ $random[$randomIndex++] }} info">
                                <span class="{{ $random[$randomIndex++] }} counter" data-count="+" data-to="25" data-speed="3000">25</span>
                                <span class="{{ $random[$randomIndex++] }} unit">K</span>
                            </div>
                            <h6 class="{{ $random[$randomIndex++] }} title">{{ $information->honor[2]['name'] }}</h6>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4 col-xl-3">
                    <div class="{{ $random[$randomIndex++] }} counter-box wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} icon">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/icon/staff.svg') }}" alt="{{ $information->honor[3]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} content">
                            <div class="{{ $random[$randomIndex++] }} info">
                                <span class="{{ $random[$randomIndex++] }} counter" data-count="+" data-to="120" data-speed="3000">120</span>
                                <span class="{{ $random[$randomIndex++] }} unit">+</span>
                            </div>
                            <h6 class="{{ $random[$randomIndex++] }} title">{{ $information->honor[3]['name'] }}</h6>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4 col-xl-3">
                    <div class="{{ $random[$randomIndex++] }} counter-box wow fadeInDown" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} icon">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/icon/award.svg') }}" alt="{{ $information->honor[4]['name'] }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} content">
                            <div class="{{ $random[$randomIndex++] }} info">
                                <span class="{{ $random[$randomIndex++] }} counter" data-count="+" data-to="50" data-speed="3000">50</span>
                                <span class="{{ $random[$randomIndex++] }} unit">+</span>
                            </div>
                            <h6 class="{{ $random[$randomIndex++] }} title">{{ $information->honor[4]['name'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} about-area py-120">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row align-items-center">
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} about-img">
                            <img class="{{ $random[$randomIndex++] }} img-1 lozad" data-src="{{ $information->about[0]['image'] }}" alt="{{ $menus[2]->name }}">
                            <div class="{{ $random[$randomIndex++] }} about-img-shape">
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/06.png') }}">
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} about-experience">
                            <span>30</span>
                            <h5>Years Of
                                <br> Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} about-right wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} site-heading mb-3">
                                    <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                                        <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> {{ $menus[2]['subtitle'] }}
                                    </span>
                            <h2 class="{{ $random[$randomIndex++] }} site-title">
                                {{ $menus[2]['name'] }}
                            </h2>
                        </div>
                        <p class="{{ $random[$randomIndex++] }} about-text">{!! $information->about[0]['text'] !!}</p>
                        <a href="{{ url($menus[2]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn">{{ $menus[2]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} service-area bg py-90">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto">
                    <div class="{{ $random[$randomIndex++] }} site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="{{ $random[$randomIndex++] }} site-title-tagline light">
                                    <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> {{ $menus[5]['subtitle'] }}
                                </span>
                        <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $menus[5]['name'] }}</h2>
                    </div>
                </div>
            </div>
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
            </div>
            <div class="{{ $random[$randomIndex++] }} text-center mt-60 wow fadeInUp" data-wow-delay=".25s">
                <a href="{{ url($menus[5]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn">{{ $menus[5]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} video-area">
        <div class="{{ $random[$randomIndex++] }} container-fluid px-0">
            <div class="{{ $random[$randomIndex++] }} video-content">
                <a class="{{ $random[$randomIndex++] }} play-btn popup-youtube" href="{{ url('/') }}">
                    <i class="{{ $random[$randomIndex++] }} fas fa-play"></i>
                </a>
                <div class="{{ $random[$randomIndex++] }} video-img lozad" data-bg-image="{{ asset('assets/img/video/01.jpg') }}">
                    <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} video-info">
                            <h2 style="color: white">我们提供专业知识，帮助您的企业成长</h2><br>
                            <a href="{{ url($menus[6]['link']) }}" class="{{ $random[$randomIndex++] }} theme-btn">{{ $menus[6]['link_name'] }}<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="{{ $random[$randomIndex++] }} process-area">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} process-wrap pt-50 pb-50">
                <div class="{{ $random[$randomIndex++] }} process-shape">
                    <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/shape/09.png') }}">
                </div>
                <div class="{{ $random[$randomIndex++] }} row">
                    <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto">
                        <div class="{{ $random[$randomIndex++] }} site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                    <span class="{{ $random[$randomIndex++] }} site-title-tagline light">
                                        <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> Working Process
                                    </span>
                            <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $information->workflow[0]['title'] }}</h2>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} row g-4 justify-content-between wow fadeInUp" data-wow-delay=".25s">
                    <div class="{{ $random[$randomIndex++] }} col-lg-3 col-md-6 text-center">
                        <div class="{{ $random[$randomIndex++] }} process-item">
                            <div class="{{ $random[$randomIndex++] }} icon">
                                <span>01</span>
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/process/01.jpg') }}" alt="{{ $information->workflow[1]['name'] }}">
                            </div>
                            <h4>{{ $information->workflow[1]['name'] }}</h4>
                            <p>{{ $information->workflow[1]['text'] }}</p>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-lg-3 col-md-6 text-center">
                        <div class="{{ $random[$randomIndex++] }} process-item">
                            <div class="{{ $random[$randomIndex++] }} icon">
                                <span>02</span>
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/process/02.jpg') }}" alt="{{ $information->workflow[2]['name'] }}">
                            </div>
                            <h4>{{ $information->workflow[2]['name'] }}</h4>
                            <p>{{ $information->workflow[2]['text'] }}</p>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-lg-3 col-md-6 text-center">
                        <div class="{{ $random[$randomIndex++] }} process-item">
                            <div class="{{ $random[$randomIndex++] }} icon">
                                <span>03</span>
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="assets/img/process/03.jpg" alt="{{ $information->workflow[3]['name'] }}">
                            </div>
                            <h4>{{ $information->workflow[3]['name'] }}</h4>
                            <p>{{ $information->workflow[3]['text'] }}</p>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-lg-3 col-md-6 text-center">
                        <div class="{{ $random[$randomIndex++] }} process-item">
                            <div class="{{ $random[$randomIndex++] }} icon">
                                <span>04</span>
                                <img class="{{ $random[$randomIndex++] }} lozad" data-src="assets/img/process/04.jpg" alt="{{ $information->workflow[4]['name'] }}">
                            </div>
                            <h4>{{ $information->workflow[4]['name'] }}</h4>
                            <p>{{ $information->workflow[4]['text'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} case-study py-100">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto">
                    <div class="{{ $random[$randomIndex++] }} site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                                    <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> {{ $menus[3]['subtitle'] }}
                                </span>
                        <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $menus[3]['name'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="{{ $random[$randomIndex++] }} row popup-gallery wow fadeInUp" data-wow-delay=".25s">
                <div class="{{ $random[$randomIndex++] }} case-slider owl-carousel owl-theme">
                    @foreach($list_article_3->take(6) as $v)
                    <div class="{{ $random[$randomIndex++] }} case-item">
                        <div class="{{ $random[$randomIndex++] }} case-img">
                            <a class="{{ $random[$randomIndex++] }} popup-img case-link" href="{{ asset($v->image) }}">
                                <i class="{{ $random[$randomIndex++] }} fal fa-plus"></i>
                            </a>
                            <img class="{{ $random[$randomIndex++] }} img-fluid lozad" data-src="{{ asset($v->image) }}" alt="{{ $v->title }}">
                            <div class="{{ $random[$randomIndex++] }} case-btn">
                                <a href="{{ url($v->link) }}">
                                    <i class="{{ $random[$randomIndex++] }} far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} case-content">
                            <h4>
                                <a href="{{ url($v->link) }}">{{ $v->title }}</a>
                            </h4>
                        </div>
                    </div>
                    @endforeach
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
    <div class="{{ $random[$randomIndex++] }} quote-area">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-7 ms-auto">
                    <div class="{{ $random[$randomIndex++] }} quote-content">
                        <div class="{{ $random[$randomIndex++] }} quote-head">
                            <h3>{{ $information->freequote[0]['title'] }}</h3>
                            <p>{{ $information->freequote[0]['subtitle'] }}</p>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} quote-form">
                            <form action="{{ url('/') }}">
                                <div class="{{ $random[$randomIndex++] }} row">
                                    <div class="{{ $random[$randomIndex++] }} col-lg-6">
                                        <div class="{{ $random[$randomIndex++] }} input-group">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-user-tie"></i>
                                                    </span>
                                            <input type="text" class="{{ $random[$randomIndex++] }} form-control" placeholder="姓名">
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col-lg-6">
                                        <div class="{{ $random[$randomIndex++] }} input-group">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-envelope"></i>
                                                    </span>
                                            <input type="email" class="{{ $random[$randomIndex++] }} form-control" placeholder="邮箱">
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col-lg-6">
                                        <div class="{{ $random[$randomIndex++] }} input-group">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-phone"></i>
                                                    </span>
                                            <input type="text" class="{{ $random[$randomIndex++] }} form-control" placeholder="电话">
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col-lg-6">
                                        <div class="{{ $random[$randomIndex++] }} input-group">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-box"></i>
                                                    </span>
                                            <select class="{{ $random[$randomIndex++] }} select form-select form-control">
                                                <option value="">主题</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col-lg-12">
                                        <div class="{{ $random[$randomIndex++] }} input-group textarea">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-comment-lines"></i>
                                                    </span>
                                            <textarea class="{{ $random[$randomIndex++] }} form-control" cols="30" rows="4" placeholder="内容"></textarea>
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col-lg-12">
                                        <button type="submit" class="{{ $random[$randomIndex++] }} theme-btn">提交<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $random[$randomIndex++] }} team-area py-100">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto">
                    <div class="{{ $random[$randomIndex++] }} site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                                    <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> Our Team
                                </span>
                        <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $information->team[0]['title'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="{{ $random[$randomIndex++] }} row g-4">
                @for($i=1; $i<=4; $i++)
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-3">
                    <div class="{{ $random[$randomIndex++] }} team-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} team-img">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset($information->team[$i]['image']) }}" alt="{{ $information->team[$i]['name'] }}">
                            <div class="{{ $random[$randomIndex++] }} team-social-wrap">
                                <div class="{{ $random[$randomIndex++] }} team-social-btn">
                                    <button type="button">
                                        <i class="{{ $random[$randomIndex++] }} far fa-share-alt"></i>
                                    </button>
                                </div>
                                <div class="{{ $random[$randomIndex++] }} team-social">
                                    <a href="{{ url('/') }}">
                                        <i class="{{ $random[$randomIndex++] }} fab fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ url('/') }}">
                                        <i class="{{ $random[$randomIndex++] }} fab fa-x-twitter"></i>
                                    </a>
                                    <a href="{{ url('/') }}">
                                        <i class="{{ $random[$randomIndex++] }} fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="{{ url('/') }}">
                                        <i class="{{ $random[$randomIndex++] }} fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} team-content">
                            <h4>{{ $information->team[$i]['name'] }}</h4>
                            <span>{{ $information->team[$i]['text'] }}</span>
                        </div>
                    </div>
                </div>
                @endfor
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
    <div class="{{ $random[$randomIndex++] }} blog-area py-100">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row">
                <div class="{{ $random[$randomIndex++] }} col-lg-6 mx-auto">
                    <div class="{{ $random[$randomIndex++] }} site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                                    <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> {{ $menus[4]['subtitle'] }}
                                </span>
                        <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $menus[4]['name'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="{{ $random[$randomIndex++] }} row g-4">
                @foreach($list_article_4->take(3) as $v)
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4">
                    <div class="{{ $random[$randomIndex++] }} blog-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="{{ $random[$randomIndex++] }} blog-item-img">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset($v->image) }}" alt="{{ $v->title }}">
                        </div>
                        <div class="{{ $random[$randomIndex++] }} blog-item-info">
                            <div class="{{ $random[$randomIndex++] }} blog-item-meta">
                                <ul>
                                    <li><i class="{{ $random[$randomIndex++] }} fas fa-clock"></i>  {{ date('Y-m-d', strtotime($v->datatime)) }}</li>
                                    <li>
                                        <i class="{{ $random[$randomIndex++] }} far fa-thumbs-up"></i> {{ $v->click }}
                                    </li>
                                </ul>
                            </div>
                            <h4 class="{{ $random[$randomIndex++] }} blog-title">
                                <a href="{{ url($v->link) }}">{{ $v->title }}</a>
                            </h4>
                            <p>
                                {{ mb_substr(strip_tags($v->content), 0, 100) . '...' }}
                            </p>
                            <a class="{{ $random[$randomIndex++] }} theme-btn" href="{{ url($v->link) }}">查看<i class="{{ $random[$randomIndex++] }} fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
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
