@extends('backend.templates.main')

@section('page_content')

    <form action="{{ route('categories.update', $category->id) }}" class="ui form bottom attached fluid segment" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <div class="field">
            <label>Название</label>
            <input type="text" name="name" required value="{{ $category->name }}">
        </div>
        <div class="field">
            <label>Псевдоним (slug) - испльзуется для генерации URL</label>
            <input type="text" name="slug" required value="{{ $category->slug }}">
        </div>
        <div class="field">
            <label>Текст</label>
            <textarea class="summernote" name="text">{!! $category->text !!}</textarea>
        </div>

        <div class="field">
            <label>title - для мета-заголовка страницы</label>
            <div class="ui right labeled input">
                <input type="text" name="title" value="{{ $category->title }}" class="js-chars_count js-chars_count-title" data-counter="js-chars_counter-title">
                <div class="ui label">
                    <i class="icon font"></i><span class="js-chars_counter js-chars_counter-title" data-count="js-chars_count-title">0</span>
                </div>
            </div>
        </div>

        <div class="field">
            <label>meta_description</label>
            <div class="ui right labeled input">
                <input type="text" name="meta_description" value="{{ $category->meta_description }}" class="js-chars_count js-chars_count-meta_description" data-counter="js-chars_counter-meta_description">
                <div class="ui label">
                    <i class="icon font"></i><span class="js-chars_counter js-chars_counter-meta_description" data-count="js-chars_count-meta_description">0</span>
                </div>
            </div>
        </div>

        <div class="field">
            <label>meta_keywords</label>
            <div class="ui right labeled input">
                <input type="text" name="meta_keywords" value="{{ $category->meta_keywords }}" class="js-chars_count js-chars_count-meta_keywords" data-counter="js-chars_counter-meta_keywords">
                <div class="ui label">
                    <i class="icon font"></i><span class="js-chars_counter js-chars_counter-meta_keywords" data-count="js-chars_count-meta_keywords">0</span>
                </div>
            </div>
        </div>

        <button class="ui button positive" type="submit">Сохранить</button>
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