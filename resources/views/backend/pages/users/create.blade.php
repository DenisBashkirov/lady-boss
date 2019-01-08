@extends('backend.templates.main')

@section('page_content')

    <h1 class="ui header">Добавление пользователя</h1>

    <form action="{{ route('users.store') }}" class="ui form bottom attached fluid segment" method="post">
        @csrf
        <div class="field">
            <label>Имя</label>
            <input type="text" name="name" required>
        </div>
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" required>
        </div>
        <div class="field">
            <label>Пароль</label>
            <input type="text" name="password" required>
        </div>
        <div class="field">
            <label>Права</label>
            <div class="ui selection dropdown">
                <input type="hidden" name="role_id" value="1">
                <i class="dropdown icon"></i>
                <div class="default text">Выберите роль</div>
                <div class="menu">
                    @foreach($roles as $role)
                        <div class="item" data-value="{{ $role->id }}">{{ $role->name }}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <button class="ui button positive" type="submit">Добавить</button>
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