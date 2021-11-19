<html>
<body>

<div style="border: 1px solid black; margin-left: 40%; margin-top: 7%; width: 200px; height: 300px; text-align: center">
    <form method="post" url="{ '/login' }" action="/login">
        @csrf
        <h3>Авторизация</h3>
        <p>Логин</p>
        <input type="text" name="login" placeholder="Введите Ваш логин">
        <p>Пароль</p>
        <input type="password" name="password" placeholder="Введите Ваш пароль">
        <p><button type="submit">Вход</button></p>
    </form>

</div>

</body>
</html>