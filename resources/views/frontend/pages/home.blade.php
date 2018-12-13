@extends('frontend.layouts.main')

@section('page_content')

    @include('frontend.sections.steam')
    @include('frontend.pages.home.primary-screen')
    @include('frontend.pages.home.benefits')
    @include('frontend.sections.gallery-section')

    @include('frontend.sections.promos-section')
    @include('frontend.pages.home.certificate')
    @include('frontend.sections.socials-section')
    @include('frontend.sections.testimonials-section')
    @include('frontend.components.forms.testimonial_add')

@endsection