<header class="header">
    <div class="header__container container">

        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('/public/img/logo/header.png') }}" class="header__logo-img" alt="Lady Boss - логотип">
            </a>
        </div>

        <div class="header__nav">
            @component('frontend.components.nav')
            @endcomponent
        </div>

        <div class="header__phone">
            <a href="#" class="link_inherit">8 (861) 249-249-7</a>
        </div>

        <div class="header__socials">
            @include('frontend.components.socials', ['size'=>'sm', 'color'=>'white'])
        </div>

        <div class="header__hamburger">
            <p>меню</p>
            <button class="hamburger hamburger--spring" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>

        <!-- NAV-SERVICES -->
        <div class="nav-services js-nav_services">
            <div class="nav-services__container">
                @foreach($categories as $category)
                    <div class="nav-services__item">
                        <a href="{{ route('category', $category->slug) }}" class="nav-services__category text_iconed">
                            <span class="icon-{{ $category->slug }} nav-services__category-icon"></span>
                            <span>{{ $category->name }}</span>
                        </a>
                        <div class="nav-services__subcategories">
                            @foreach($category->subcategories as $subcategory)
                                <a href="{{ route('programs', $subcategory->slug) }}" class="nav-services__subcategory">{{ $subcategory->name }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</header>