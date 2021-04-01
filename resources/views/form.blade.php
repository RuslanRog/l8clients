@extends('layout')
@section('title', isset($user) ? 'Обновление ' .$user->name : 'Создать клиента')
@section('content')

    <a type="button" class="btn btn-dark" href="{{route('users.index')}}">К списку</a>

    <form method="POST"
          @if(isset($user))
          action="{{route('users.update', $user)}}"
          @else
          action="{{route('users.store')}}"
          @endif
          class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset

        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{old('name', isset($user) ? $user->name : null)}}"
                       type="text" class="form-control" placeholder="Имя" aria-label="Имя">
{{--                @error('name')--}}
{{--                <div class="alert alert-danger">{{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
            </div>
            <div class="col">
                <input name="email"
                       value="{{old('email', isset($user) ? $user->email : null)}}"
                       type="text" class="form-control" placeholder="Email" aria-label="Email">
{{--                @error('email')--}}
{{--                <div class="alert alert-danger">{{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
@endsection
