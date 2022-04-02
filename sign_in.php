<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Страница регистрации</h1>
    <form action="auth.php" method="post">
        <input type="text" placeholder="Придумайте имя пользователя" name = "new_login">
        <input type="password" placeholder="Придумайте пароль" name = "new_password">
        <input type="submit" value="Зарегистрироваться">
    </form>

    <a href="/login.html">Страница авторизации</a>
</body>
</html>