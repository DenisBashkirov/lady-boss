@extends('backend.templates.main')

@section('page_content')

    <h1 class="ui header">Добавление в галерею</h1>

    <div class="ui top attached info icon message">
        <i class="icon help"></i>
        <div class="content">
            <p>Из выбранного файла будет сохранено два изображения:</p>
            <div class="ui bulleted list">
                <div class="item">Основное изображение с шириной 1920 пикселей</div>
                <div class="item">Уменьшенное изображение с шириной 330 пикселей</div>
            </div>
        </div>
    </div>

    <form action="{{ route('gallery.store') }}" class="ui form bottom attached fluid segment" method="post" enctype="multipart/form-data">
        @csrf
        <div class="field">
            <input type="file" name="image" required>
        </div>
        <button class="ui button positive" type="submit">Загрузить</button>
    </form>

    @if (count($errors) > 0)
        <div class="ui orange message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection