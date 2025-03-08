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
    <div class="{{ $random[$randomIndex++] }} contact-area py-120">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} contact-content">
                <div class="{{ $random[$randomIndex++] }} row">
                    <div class="{{ $random[$randomIndex++] }} col-md-3">
                        <div class="{{ $random[$randomIndex++] }} contact-info">
                            <div class="{{ $random[$randomIndex++] }} contact-info-icon">
                                <i class="{{ $random[$randomIndex++] }} fal fa-map-location-dot"></i>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} contact-info-content">
                                <h5>地址</h5>
                                <p>{{ $information->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-md-3">
                        <div class="{{ $random[$randomIndex++] }} contact-info">
                            <div class="{{ $random[$randomIndex++] }} contact-info-icon">
                                <i class="{{ $random[$randomIndex++] }} fal fa-phone-volume"></i>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} contact-info-content">
                                <h5>电话</h5>
                                <p>+{{ $information->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-md-3">
                        <div class="{{ $random[$randomIndex++] }} contact-info">
                            <div class="{{ $random[$randomIndex++] }} contact-info-icon">
                                <i class="{{ $random[$randomIndex++] }} fal fa-envelopes"></i>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} contact-info-content">
                                <h5>邮箱</h5>
                                <p>
                                    <a href="mailto:{{ $information->email }}" class="{{ $random[$randomIndex++] }} __cf_email__" >{{ $information->email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-md-3">
                        <div class="{{ $random[$randomIndex++] }} contact-info">
                            <div class="{{ $random[$randomIndex++] }} contact-info-icon">
                                <i class="{{ $random[$randomIndex++] }} fal fa-alarm-clock"></i>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} contact-info-content">
                                <h5>上班时间</h5>
                                <p>周一至周六（上午10:00至下午5:30）</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{ $random[$randomIndex++] }} contact-wrapper">
                <div class="{{ $random[$randomIndex++] }} row g-4">
                    <div class="{{ $random[$randomIndex++] }} col-lg-5">
                        <div class="{{ $random[$randomIndex++] }} contact-img">
                            <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset('assets/img/contact/01.jpg') }}">
                        </div>
                    </div>
                    <div class="{{ $random[$randomIndex++] }} col-lg-7">
                        <div class="{{ $random[$randomIndex++] }} contact-form">
                            <div class="{{ $random[$randomIndex++] }} contact-form-header">
                                <h2>{{ $information->freequote[0]['title'] }}</h2>
                                <p>{{ $information->freequote[0]['subtitle'] }}</p>
                            </div>
                            <form method="post" action="{{ url('/') }}" id="contact-form">
                                <div class="{{ $random[$randomIndex++] }} row">
                                    <div class="{{ $random[$randomIndex++] }} col-md-6">
                                        <div class="{{ $random[$randomIndex++] }} input-group">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-user-tie"></i>
                                                    </span>
                                            <input type="text" class="{{ $random[$randomIndex++] }} form-control" name="name" placeholder="姓名" required>
                                        </div>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} col-md-6">
                                        <div class="{{ $random[$randomIndex++] }} input-group">
                                                    <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                        <i class="{{ $random[$randomIndex++] }} far fa-envelope"></i>
                                                    </span>
                                            <input type="email" class="{{ $random[$randomIndex++] }} form-control" name="email" placeholder="邮箱" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{ $random[$randomIndex++] }} input-group">
                                            <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                <i class="{{ $random[$randomIndex++] }} far fa-pen"></i>
                                            </span>
                                    <input type="text" class="{{ $random[$randomIndex++] }} form-control" name="subject" placeholder="主题" required>
                                </div>
                                <div class="{{ $random[$randomIndex++] }} input-group textarea">
                                            <span class="{{ $random[$randomIndex++] }} input-group-text">
                                                <i class="{{ $random[$randomIndex++] }} far fa-comment-lines"></i>
                                            </span>
                                    <textarea name="message" cols="30" rows="5" class="{{ $random[$randomIndex++] }} form-control" placeholder="内容"></textarea>
                                </div>
                                <button type="submit" class="{{ $random[$randomIndex++] }} theme-btn">发送<i class="{{ $random[$randomIndex++] }} far fa-paper-plane"></i>
                                </button>
                                <div class="{{ $random[$randomIndex++] }} col-md-12 mt-3">
                                    <div class="{{ $random[$randomIndex++] }} form-messege text-success"></div>
                                </div>
                            </form>
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
