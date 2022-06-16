@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

    <main class="profile_main">
        <container>
            <h1>Личный кабинет</h1>

            <div class="menu-profile">
                <a href=""><img src="" alt="">Профиль</a>
                <a href=""><img src="" alt="">Корзина</a>
                <a href=""><img src="" alt="">Избранное</a>
                <a href=""><img src="" alt="">Редактировать данные</a>
                <a href=""><img src="" alt="">Выйти</a>
            </div>

            <div class="profile">
                <h1>Профиль</h1>
                <div class="info-profile">
                    <h3>Данные аккаунта</h3>
                    <p>Имя:</p>
                    <p>Логин:</p>
                    <p>Email:</p>
                </div>
            </div>


        </container>
    </main>

@endsection
