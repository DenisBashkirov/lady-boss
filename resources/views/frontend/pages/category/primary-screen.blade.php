<div class="primary-screen" style="background-image: url('/public/img/categories/{{ $category->slug }}_big.jpg');">

    <div class="overlay primary-screen__overlay"></div>

    <div class="primary-screen__container container">

        <div class="primary-screen__body" data-aos="fade-up">
            <div class="primary-screen__logo">
                <img src="{{ asset('img/logo/primary-screen.png') }}" alt="Lady Boss - Салон красоты, спа и массажа в Краснодре">
            </div>
            <h1 class="h1 h1_page_primary-screen">{{ $category->name }}</h1>
            @if ($category->text)
                <p class="primary-screen__text">{{ $category->text }}</p>
            @endif
        </div>

    </div>

</div>