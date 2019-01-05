@extends('frontend.templates.main')

@section('page_content')

    @include('frontend.pages.category.primary-screen')

    <div class="section container">
        <div class="text-seo section__body">
            @if($category->text)
                {!! $category->text !!}
            @endif
        </div>
    </div>

    @include('frontend.pages.category.subcategories_list')

@endsection