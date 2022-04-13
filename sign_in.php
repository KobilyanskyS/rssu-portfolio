<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/sign_in.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
    <?include 'header.php'?>
    <main>
        <div class="wrapper">
    <div class="main__header">
        <h1 class="page_name">Зарегистрироваться</h1>
        <p class="login_text">Уже зарегистрированы? <a id="login_link" href="/login.php">Войти</a></p>
    </div>
    <div class="sign_in_form_container">
    <form action="auth.php" method="post" class="sign_in_form">
        <table>
            <tr>
                <td><p class="input_description">Введите имя</p></td>
                <td><input type="text" placeholder="Ваше имя" id="new_name" name = "new_name"></td>
            </tr>
            <tr>
                <td><p class="input_description">Введите фамилию</p></td>
                <td><input type="text" placeholder="Ваша фамилия" id="new_surname" name = "new_surname"></td>
            </tr>
            <tr>
                <td><p class="input_description">Введите отчество</p></td>
                <td><input type="text" placeholder="Ваше отчество" id = "new_fath" name = "new_fath"></td>
            </tr>
            <tr>
                <td><p class="input_description">Введите дату рождения</p></td>
                <td><input type="date" placeholder="Ваша дата рождения" id = "new_born" name = "new_born"></td>
            </tr>
            <tr>
                <td><p class="input_description">Введите имя</p></td>
                <td>
                <select name="new_spec" id="new_spec" placeholder="Ваша специальность">
                    <option value="value1">Информационные системы</option>
                    <option value="value2">Дизайн</option>
                    <option value="value3">Право и социальное обеспечение</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><p class="input_description">Укажите пол</p></td>
                <td id="gender_cell">
                    <div>
                        <input type="radio" id="genderChoice1" name="gender" value="male">
                        <label for="genderChoice1">Мужской</label>
                    </div>
                    <div>
                        <input type="radio" id="genderChoice2" name="gender" value="ауmale">
                        <label for="genderChoice2">Женский</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><p class="input_description">Введите электронную почту</p></td>
                <td><input type="email" placeholder="Ваша почта" id = "new_emal" name = "new_emal"></td>
            </tr>
            <tr>
                <td><p class="input_description">Введите номер телефона</p></td>
                <td><input type="tel" placeholder="Ваш номер телефона" id = "new_phone" name = "new_phone"></td>
            </tr>
            <tr>
                <td><p class="input_description">Придумайте имя пользователя</p></td>
                <td><input type="text" placeholder="Ваше имя пользователя" id = "new_login" name = "new_login"></td>
            </tr>
            <tr>
                <td><p class="input_description">Придумайте пароль</p></td>
                <td><input type="password" placeholder="Ваш пароль" id = "new_password" name = "new_password"></td>
            </tr>
            <tr>
                <td><p class="input_description">Подтвердите пароль</p></td>
                <td><input type="password" placeholder="Ваш пароль" id = "new_password_confirm" name = "new_password_confirm"></td>
            </tr>
        </table>
        <input id="submit" type="submit" value="Зарегистрироваться">
    </form>
    </div>
    </div>    
</main>
</body>
</html>