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
    <div class="{{ $random[$randomIndex++] }} blog-single py-120">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row g-4">
                <div class="{{ $random[$randomIndex++] }} col-lg-8">
                    <div class="{{ $random[$randomIndex++] }} blog-single-wrapper">
                        <div class="{{ $random[$randomIndex++] }} blog-single-content">
                            <div class="{{ $random[$randomIndex++] }} blog-info">
                                <h3 class="{{ $random[$randomIndex++] }} blog-details-title mb-20">{{ $article->title }}</h3>
                                <div class="{{ $random[$randomIndex++] }} blog-meta">
                                    <div class="{{ $random[$randomIndex++] }} blog-meta-left">
                                        <ul>
                                            <li><i class="{{ $random[$randomIndex++] }} fas fa-clock"></i>  {{ date('Y-m-d', strtotime($article->datatime)) }}</li>
                                            <li><i class="{{ $random[$randomIndex++] }} far fa-thumbs-up"></i>{{ $article->click }}</li>
                                        </ul>
                                    </div>
                                    <div class="{{ $random[$randomIndex++] }} blog-meta-right">
                                        <a href="{{ request()->url() }}" class="{{ $random[$randomIndex++] }} share-link"><i class="{{ $random[$randomIndex++] }} far fa-share-alt"></i>分享</a>
                                    </div>
                                </div>
                                <div class="{{ $random[$randomIndex++] }} blog-details">
                                    {!! $article->content !!}
                                </div>
                                <div class="{{ $random[$randomIndex++] }} d-flex justify-content-between mt-20">
                                    @if(isset($prev->link))
                                        <a href="{{ url($prev->link) }}">上一篇</a>
                                    @endif
                                    @if(isset($next->link))
                                        <a href="{{ url($next->link) }}">下一篇</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{ $random[$randomIndex++] }} col-lg-4">
                    <aside class="{{ $random[$randomIndex++] }} sidebar">
                        <div class="{{ $random[$randomIndex++] }} widget search">
                            <h5 class="{{ $random[$randomIndex++] }} widget-title">搜索</h5>
                            <form class="{{ $random[$randomIndex++] }} search-form">
                                <input type="text" class="{{ $random[$randomIndex++] }} form-control" placeholder="Search Here...">
                                <button type="submit"><i class="{{ $random[$randomIndex++] }} far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} widget category">
                            <h5 class="{{ $random[$randomIndex++] }} widget-title">导航</h5>
                            <div class="{{ $random[$randomIndex++] }} category-list">
                                @foreach($menus as $v)
                                    @if($v->id != 1)
                                <a href="{{ url($v->link) }}"><i class="{{ $random[$randomIndex++] }} far fa-arrow-right"></i>{{ $v->name }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} widget recent-post">
                            <h5 class="{{ $random[$randomIndex++] }} widget-title">推荐文章</h5>
                            @foreach($menu_article->where('recommend', 1)->take(10) as $v)
                            <div class="{{ $random[$randomIndex++] }} recent-post-single">
                                <div class="{{ $random[$randomIndex++] }} recent-post-img">
                                    <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset($v->image) }}" alt="{{ $v->title }}">
                                </div>
                                <div class="{{ $random[$randomIndex++] }} recent-post-bio">
                                    <h6><a href="{{ url($v->link) }}">{{ $v->title }}</a></h6>
                                    <span><i class="{{ $random[$randomIndex++] }} far fa-clock"></i>{{ date('Y-m-d', strtotime($v->datatime)) }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')
</body>
</html>
