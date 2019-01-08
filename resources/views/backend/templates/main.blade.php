@extends('backend.templates.document')

@section('template')

    <div class="body-layout">

        <div class="body-layout__top-menu ui top menu visible">
            <div class="ui dropdown right item">
                <div class="text">{{ Auth::user()->name }}</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="sign out icon"></i>Выход
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <div class="body-layout__sidebar ui menu vertical">
            <div class="item">
                <div class="header">Галерея</div>
                <div class="menu">
                    <div class="item"><a href="{{ route('gallery.index') }}"><i class="icon bars"></i>Список</a></div>
                    <div class="item"><a href="{{ route('gallery.create') }}"><i class="icon plus"></i>Добавить</a></div>
                </div>
            </div>
            <div class="item">
                <div class="header">Отзывы</div>
                <div class="menu">
                    <div class="item"><a href="{{ route('testimonials.index') }}"><i class="icon bars"></i>Список</a></div>
                </div>
            </div>
            @if(Gate::allows('manage-users'))
                <div class="item">
                    <div class="header">Пользователи</div>
                    <div class="menu">
                        <div class="item"><a href="{{ route('users.index') }}"><i class="icon bars"></i>Список</a></div>
                        <div class="item"><a href="{{ route('users.create') }}"><i class="icon plus"></i>Добавить</a></div>
                    </div>
                </div>
            @endif
            @if(Gate::allows('manage-categories'))
                <div class="item">
                    <div class="header">Категории</div>
                    <div class="menu">
                        <div class="item"><a href="{{ route('categories.index') }}"><i class="icon bars"></i>Список</a></div>
                    </div>
                </div>
            @endif
        </div>

        <div class="body-layout__content">
            @yield('page_content')
        </div>

    </div>

@endsection