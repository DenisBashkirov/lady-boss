@extends('frontend.templates.document')

@section('template')

    @include('frontend.layouts.nav-mobile')
    @include('frontend.layouts.header')

    @yield('page_content')

    @include('frontend.layouts.footer')

@endsection

@section('module_booking')
    <!-- МОДУЛЬ БРОНИРОВАНИЯ -->
    <script src="https://clients.aihelps.com/bundle.js" codes="858025" type="text/javascript" charset="UTF-8"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBohUKb9i6NkJzia71zM5kFWNCIhqVG_wI" type="text/javascript" charset="UTF-8" async defer></script>
@endsection

@section('ymap')
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
@endsection