@extends('backend.templates.main')

@section('page_content')

    <h1 class="ui header">Редактирование пользователя</h1>

    <form action="{{ route('users.update', $user->id) }}" class="ui form bottom attached fluid segment" method="post">
        @csrf
        {{ method_field('PATCH') }}

        <div class="field">
            <label>Имя</label>
            <input type="text" name="name" required value="{{ $user->name }}">
        </div>
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" required value="{{ $user->email }}">
        </div>
        <div class="field">
            <label>Новый пароль</label>
            <input type="text" name="password">
        </div>
        <div class="field">
            <label>Права</label>
            <div class="ui selection dropdown">
                <input type="hidden" name="role_id" value="{{ $user->role_id }}">
                <i class="dropdown icon"></i>
                <div class="default text">Выберите роль</div>
                <div class="menu">
                    @foreach($roles as $role)
                        <div class="item" data-value="{{ $role->id }}">{{ $role->name }}</div>
                    @endforeach
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