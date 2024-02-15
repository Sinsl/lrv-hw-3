@extends('layouts.app')

@section('content')
<div class="container">
    <div class="front-page">
        <h1>Домашнее задание к занятию «1.3. Laravel. Middleware. Авторизация.</h1>
        <div>Защищенный роут: <a href="/profile">Профайл</a></div>
        <div>на него же ссылка в меню</div>
        <div class="info">
            При выполнении миграции с cидами создается один пользователь с данными:
            <ul>
                <li>Name: demo</li>
                <li>Email: demo@demo.ru</li>
                <li>Password: demo</li>
            </ul>
        </div>
        @guest
        <div class="btn-auth-box">
            <a href="{{ route('register') }}">Регистрация</a>
            <a href="{{ route('login') }}">Авторизация</a>
        </div>
        @endguest
    </div>
</div>
@endsection
