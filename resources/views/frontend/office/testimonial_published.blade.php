@extends('frontend.templates.message')

@section('page_content')

    <div class="message-page section container">

        <div class="section__header text_center">
            <h1 class="h1">Отзыв размещён на сайте</h1>
        </div>

        <div class="message-page__body section__body">
            @component('frontend.components.testimonial-card', ['testimonial'=>$testimonial])
            @endcomponent
        </div>

    </div>

@endsection