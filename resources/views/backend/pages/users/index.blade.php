@extends('backend.templates.main')

@section('page_content')

    <div class="ui segment">
        <table class="ui celled striped table">
            <thead>
                <tr>
                    <th>имя</th>
                    <th>email</th>
                    <th>роль</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="collapsing">
                            <i class="user icon"></i>{{ $user->name }}
                        </td>
                        <td>
                            <i class="icon mail"></i>{{ $user->email }}
                        </td>
                        <td class="collapsing">
                            <i class="icon address card"></i>{{ $user->role->name }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection