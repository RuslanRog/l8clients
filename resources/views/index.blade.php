@extends('layout')
@section('title', 'Список клиентов')
@section('content')
    <a class="btn btn-primary" role="button" href="{{route('users.create')}}">Добавить клиента</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a type="button" class="btn btn-info" href="{{route('users.edit', $user)}}">Изменить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
