@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Юзер</h1>

    @foreach ($application as $app)

        <h2># {{$app->id}}</h2>
        <p> {{$app->service_type}}</p>
        <p> {{$app->date_time}}</p>
        <p> {{$app->address}}</p>

       
            <p> {{$app->status}}</p>
    

        
        
    
    @endforeach
</div>

@endsection