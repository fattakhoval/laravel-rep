<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    @guest
    <nav>
    <a href="{{route('show_signin')}}">Вход</a>
    <a href="{{route('show_signup')}}">Регистрация</a>
    </nav>

    
    @endguest
    
    @auth

    <a href="{{route('logout')}}">Выход</a>
    <a href="{{route('create')}}">Создать</a>
    @endauth
</header>
    @yield('content')
</body>
</html>