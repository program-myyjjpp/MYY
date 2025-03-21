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
    <div class="{{ $random[$randomIndex++] }} case-study py-100">
        <div class="{{ $random[$randomIndex++] }} container">
            <div class="{{ $random[$randomIndex++] }} row align-items-center wow fadeInDown" data-wow-delay=".25s">
                <div class="{{ $random[$randomIndex++] }} col-lg-6">
                    <div class="{{ $random[$randomIndex++] }} site-heading">
                                <span class="{{ $random[$randomIndex++] }} site-title-tagline">
                                    <i class="{{ $random[$randomIndex++] }} fas fa-percent"></i> {{ $menus[3]['subtitle'] }}
                                </span>
                        <h2 class="{{ $random[$randomIndex++] }} site-title">{{ $menu_page['name'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="{{ $random[$randomIndex++] }} row g-4 popup-gallery wow fadeInUp"  id="content_masonry">
                @foreach($list_article->take(9) as $v)
                <div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4 filter-item cat1 cat2">
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
                </div>
                @endforeach
            </div>
            <div class="{{ $random[$randomIndex++] }} {{ $random[$randomIndex++] }} jl-loadmore-btn-w" data-link="{{ url('/api/' . $menu_page->link) }}">
                <div class="{{ $random[$randomIndex++] }} {{ $random[$randomIndex++] }} jl_btn_load">查看更多</div>
            </div>
        </div>
    </div>
</main>
@include('footer')
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
                        var articleHtml = `<div class="{{ $random[$randomIndex++] }} col-md-6 col-lg-4 filter-item cat1 cat2">
                    <div class="{{ $random[$randomIndex++] }} case-item">
                        <div class="{{ $random[$randomIndex++] }} case-img">
                            <a class="{{ $random[$randomIndex++] }} popup-img case-link" href="${article.image}">
                                <i class="{{ $random[$randomIndex++] }} fal fa-plus"></i>
                            </a>
                            <img class="{{ $random[$randomIndex++] }} img-fluid lozad" data-src="${article.image}" alt="${article.title}">
                            <div class="{{ $random[$randomIndex++] }} case-btn">
                                <a href="${article.link}">
                                    <i class="{{ $random[$randomIndex++] }} far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} case-content">
                            <h4>
                                <a href="${article.link}">${article.title}</a>
                            </h4>
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
