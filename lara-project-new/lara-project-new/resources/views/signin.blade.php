@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('signin')}}" method="post">
    @csrf

        <div class="mb-3">
            <label for="email">Почта</label>
            <input type="email" name="email">
        </div>

        <div class="mb-3">
            <label for="password">Пароль</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Зарегистироватся</button>
    </form>
</div>

@endsection