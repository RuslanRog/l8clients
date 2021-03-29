@extends('layout')
@section('title', 'Клиент ' . $user->name)
@section('content')
    <a type="button" class="btn btn-dark mt-3" href="{{route('users.index')}}">К списку</a>
    <a type="button" class="btn btn-info mt-3" href="{{route('users.edit', $user)}}">Изменить</a>

    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$user->id}}</li>
            <li class="list-group-item">Имя: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
            <li class="list-group-item">Создан: {{$user->created_at->format('d.m.Y h:i:s')}}</li>
            <li class="list-group-item">Обновлен: {{$user->updated_at->format('d.m.Y h:i:s')}}</li>
        </ul>
    </div>
    <div class="mt-3">
    <form method="POST" action="{{route('users.destroy', $user)}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Удалить</button>
    </form>
    </div>
@endsection
