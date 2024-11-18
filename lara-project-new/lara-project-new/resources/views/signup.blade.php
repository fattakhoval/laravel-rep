@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('signup')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="full_name">Имя</label>
            <input type="text" name="full_name">
        </div>

        <div class="mb-3">
            <label for="phone">Номер</label>
            <input type="text" name="phone">
        </div>

        <div class="mb-3">
            <label for="login">Логин</label>
            <input type="text" name="login">
        </div>

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