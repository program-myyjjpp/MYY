<header class="{{ $random[$randomIndex++] }} header">
    <div class="{{ $random[$randomIndex++] }} main-navigation">
        <nav class="{{ $random[$randomIndex++] }} navbar navbar-expand-lg">
            <div class="{{ $random[$randomIndex++] }} container position-relative">
                <a class="{{ $random[$randomIndex++] }} navbar-brand" href="{{ url('/') }}">
                    <img class="{{ $random[$randomIndex++] }} lozad" data-src="{{ asset($information->logo) }}" alt="{{ $information->title }}">
                </a>
                <div class="{{ $random[$randomIndex++] }} mobile-menu-right">
                    <div class="{{ $random[$randomIndex++] }} search-btn">
                        <button type="button" class="{{ $random[$randomIndex++] }} nav-right-link search-box-outer">
                            <i class="{{ $random[$randomIndex++] }} far fa-search"></i>
                        </button>
                    </div>
                    <button class="{{ $random[$randomIndex++] }} navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="{{ $random[$randomIndex++] }} navbar-toggler-mobile-icon">
                                    <i class="{{ $random[$randomIndex++] }} far fa-bars"></i>
                                </span>
                    </button>
                </div>
                <div class="{{ $random[$randomIndex++] }} collapse navbar-collapse" id="main_nav">
                    <ul class="{{ $random[$randomIndex++] }} navbar-nav">
                        @foreach($menus as $v)
                            <li class="{{ $random[$randomIndex++] }} nav-item">
                                <a class="{{ $random[$randomIndex++] }} nav-link" href="{{ url($v->link) }}">{{ $v->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="{{ $random[$randomIndex++] }} nav-right">
                        <div class="{{ $random[$randomIndex++] }} search-btn">
                            <button type="button" class="{{ $random[$randomIndex++] }} nav-right-link search-box-outer">
                                <i class="{{ $random[$randomIndex++] }} far fa-search"></i>
                            </button>
                        </div>
                        <div class="{{ $random[$randomIndex++] }} call-wrap">
                            <div class="{{ $random[$randomIndex++] }} icon">
                                <i class="{{ $random[$randomIndex++] }} far fa-phone-volume"></i>
                            </div>
                            <div class="{{ $random[$randomIndex++] }} content">
                                <span>Call 24/7</span>
                                <h6>
                                    <a href="tel:{{ $information->phone }}">{{ $information->phone }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="{{ $random[$randomIndex++] }} search-popup">
    <button class="{{ $random[$randomIndex++] }} close-search">
        <span class="{{ $random[$randomIndex++] }} far fa-times"></span>
    </button>
    <form action="{{ url('/') }}">
        <div class="{{ $random[$randomIndex++] }} form-group">
            <input type="search" name="search-field" class="{{ $random[$randomIndex++] }} form-control" placeholder="Search Here..." required>
            <button type="submit">
                <i class="{{ $random[$randomIndex++] }} far fa-search"></i>
            </button>
        </div>
    </form>
</div>
