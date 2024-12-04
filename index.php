<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tic-Tac-Toe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="auth">

    <form class="auth__form" method="POST" action="">

        <h2 class="auth__title">Вход</h2>

        <div class="auth__field">
            <label class="auth__label" for="username">Логин</label>
            <input class="auth__input" type="text" id="username" name="username" required>
        </div>

        <div class="auth__field">
            <label class="auth__label" for="password">Пароль</label>
            <input class="auth__input" type="password" id="password" name="password" required>
        </div>

        <button class="auth__button" type="submit">Войти</button>

    </form>

</div>
</body>
</html>