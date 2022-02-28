<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-orange-100">

    <div class="text-center text-2xl font-bold my-3 flex justify-center space-x-2">
        <div>
            {{ config('app.name') }}
        </div>
    </div>
    <div class="flex justify-center space-x-3 text-orange-600">
        @guest
        <a href="{{ route('home') }}" class="font-bold">Home</a>
        <a href="{{ route('auth::login') }}">Login</a>
        <a href="{{ route('auth::register') }}">Register</a>
        @else
        <div class="text-black">Hi, {{ auth()->user()->name }}</div>
        <a href="#">Dashboard</a>
        <a href="{{ route('tasks') }}">Tasks</a>
        <a href="#">Projects</a>
        <a href="#">Logout</a>
        @endguest
    </div>

    @yield('content')

    <footer class="text-center my-5">
        <div>&copy; {{ config('app.name') }}</div>
    </footer>
</body>
</html>
