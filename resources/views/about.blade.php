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
</main>
@include('footer')
</body>
</html>
