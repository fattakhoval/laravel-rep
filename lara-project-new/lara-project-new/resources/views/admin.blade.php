@extends('layouts.app')
@section('content')

<div class="container">
    <h1>админ</h1>

    @foreach ($application as $app)

        <h2># {{$app->id}}</h2>
        <p> {{$app->service_type}}</p>
        <p> {{$app->date_time}}</p>
        <p> {{$app->address}}</p>

        @if ($app->status == 'новая')

            <a href="{{route('reject', ['id'=>$app->id])}}">отклонить</a>
            <a href="{{route('accept', ['id'=>$app->id])}}">принять</a>
        @else
            <p> {{$app->status}}</p>
        @endif

        
        
    
    @endforeach
</div>

@endsection