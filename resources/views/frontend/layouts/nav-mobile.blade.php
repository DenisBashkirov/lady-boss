<div class="nav-mobile">
    <div class="nav-mobile__container container">
        <div class="nav-mobile__menu">
            @component('frontend.components.nav')
            @endcomponent
        </div>
        <div class="nav-mobile__contacts text_size_xl">
            @component('frontend.components.contacts')
            @endcomponent
        </div>
        <div class="nav-mobile__socials">
            @include('frontend.components.socials', ['size'=>'sm', 'color'=>'white'])
        </div>
    </div>
</div>