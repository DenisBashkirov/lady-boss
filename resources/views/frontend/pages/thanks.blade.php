@extends('frontend.templates.message')

@section('page_content')

    <div class="thanks section container">

        <div class="thanks__header section__header">
            <h1 class="h1">Спасибо за ваш отзыв!</h1>
        </div>

        <div class="thanks__body section__body">
            <div class="thanks__text">
                <p>Мы получили ваш отзыв и ознакомимся с ним, как только освободимся.</p>
                <p>Нам интересен каждый отзыв о нашей работе, даже если он не положительный.</p>
            </div>
        </div>

        <div class="section__btns">
            <a href="{{ route('home') }}" class="btn btn_size_lg btn_color_green">На главную</a>
        </div>

    </div>

@endsection