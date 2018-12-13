@extends('frontend.templates.main')

@section('page_content')

    @include('frontend.pages.category.primary-screen')
    @include('frontend.pages.category.subcategories_list')

@endsection