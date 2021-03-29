@extends('layout')
@section('title', isset($user) ? 'Update'. $user->name : 'Создать клиента')
@section('content')
    <a type="button" class="btn btn-dark" href="{{route('users.index')}}">К списку</a>
    <form method="POST"
          @if(isset($user))
          action="{{route('users.update', $user)}}"
          @else
          action="{{route('users.store')}}"
          @endif
          class="mt-4">
        @csrf
        @isset($user)
        @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{isset($user) ? $user->name : null}}"
                       type="text" class="form-control" placeholder="Имя" aria-label="Имя">
            </div>
            <div class="col">
                <input name = "email"
                       value="{{isset($user) ? $user->email : null}}"
                       type="text" class="form-control" placeholder="Email" aria-label="Email">
            </div>
            <div class ="col">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
@endsection
