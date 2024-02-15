@extends('layouts.app')

@section('content')
<div class="container">
    <div class="user-box">
        <h5>Данные пользователя:</h5>
        <div>ID: {{ $user->id}}</div>
        <div>Имя: {{ $user->name}}</div>
        <div>Email: {{ $user->email}}</div>
        <div>Создан: {{ date('d-m-Y', strtotime($user->created_at)) }}</div>
        <div>Обновлен: {{ date('d-m-Y', strtotime($user->updated_at)) }}</div>
    </div>
</div>
@endsection