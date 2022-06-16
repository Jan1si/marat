<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1>Авторизация</h1>
        </div>
        <div class="form-content">
            <form class="sign_in" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Логин</label>
                    <input type="text" id="username" name="username" required="required"/>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required="required"/>
                </div>
                <div class="form-group">
                    <label class="form-remember">
                        <input type="checkbox"/>Запомнить
                    </label><a class="form-recovery" href="{{ route('home') }}">На главную</a>
                </div>
                <div class="form-group">
                    <button type="submit">Войти</button>
                </div>
            </form>
        </div>
    </div>
    <div class="form-panel two" >
        <div class="form-header" >
            <h1>Регистрация</h1>
        </div>
        <div class="form-content">
            <form class="sign_up" action="{{ route('test') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Логин</label>
                    <input type="text" id="name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Email" required/>

                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" placeholder="Password" required/>
                </div>

                <div class="form-group">
                    <label for="check_password">Подтвердите пароль</label>
                    <input type="password" id="check_password" name="check_password" placeholder="Check_password" required/>
                </div>
                <div class="form-group">
                    <button type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
<script src="js/index.js"></script>
</html>

