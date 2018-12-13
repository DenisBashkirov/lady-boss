<script src="{{ asset('libs/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('libs/jquery.hyphen/jquery.hyphen.ru.min.js') }}"></script>
<script src="{{ asset('libs/slick-slider/slick.min.js') }}"></script>
<script src="{{ asset('libs/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('libs/aos/aos.js') }}"></script>
<script src="{{ asset('libs/tilt/tilt.jquery.js') }}"></script>
<script src="{{ asset('libs/paroller/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('libs/masonry/masonry.min.js') }}"></script>
<script src="{{ asset('js/frontend.js?t=') . microtime(true) }}"></script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<script type="text/javascript">
    ymaps.ready(function(){
        var myPlaceMark = new ymaps.Placemark([45.049825, 39.028448], {}, {
            iconLayout: 'default#image',
            iconImageHref: 'img/icon.png',
            iconImageSize: [20, 20],
            iconImageOffset: [0, 0]
        });

        var ymap = new ymaps.Map("ymap", {
            center: [45.049825, 39.028448],
            zoom: 16,
            controls: []
        });

        ymap.behaviors.disable('drag');

        ymap.geoObjects.add(myPlaceMark);
    });
</script>