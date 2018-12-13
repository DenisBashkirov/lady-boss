<footer class="footer section_padding_null">
    <div class="footer__container section container">

        <h2 class="h2 footer__header">Контакты</h2>

        <div class="footer__body">

            <div class="footer__content">
                <div class="footer__logo">
                    <img src="{{ asset('img/logo/primary-screen.png') }}" alt="Lady Boss логотип" class="footer__logo-img">
                </div>
                <div class="footer__contacts text_size_xl">
                    @component('frontend.components.contacts')
                    @endcomponent
                </div>
                <div class="footer__socials">
                    @include('frontend.components.socials', ['size'=>'md', 'color'=>'white'])
                </div>
            </div>

            <div class="footer__map">
                <div id="ymap" class="ymap"></div>
            </div>

        </div>

    </div>
</footer>