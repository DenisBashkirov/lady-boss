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