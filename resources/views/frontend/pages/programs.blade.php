@extends('frontend.templates.main')

@section('page_content')

    @include('frontend.pages.programs.primary-screen')

    <div class="section container">
        <div class="text-seo section__body">
            @if($subcategory->text)
                {!! $subcategory->text !!}
            @endif
        </div>
    </div>

    @include('frontend.pages.programs.programs_list')

@endsection