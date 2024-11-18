@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('create')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="service_type">Тип</label>
            <input type="text" name="service_type">
        </div>

        <div class="mb-3">
            <label for="date_time">Дата</label>
            <input type="date" name="date_time">
        </div>

        <div class="mb-3">
            <label for="address">Адрес</label>
            <input type="text" name="address">
        </div>

        <div class="mb-3">
            
            <input type="hidden" name="status" value="новая">
        </div>

        <div class="mb-3">
            <input type="hidden" name="user_id" value="1">
        </div>

        <button type="submit">Отправить</button>
    </form>
</div>

@endsection