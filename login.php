<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио студента</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/main.js"></script>
</head>

<body>
    <?include 'header.php' ?>
    <main class="main">
        <div class="wrapper">
            <h1 class="main__header bold_text">Портфолио студента Колледжа РГСУ</h1>
            <div class="main__welcome bold_text">Добро пожаловать!</div>
            <div class="main__button" onclick="PopUpShow()">Авторизоваться</div>
            <a class="register_link" href="sign_in.php">Зарегистрироваться</a>
        </div>
        <div class="main__modal">
            <div class="main__modal_blur">
                <div class="main__modal_block">
                    <div class="modal_wrapper">
                        <div class="main__modal_block_header">
                            <div class="close_btn" onclick="PopUpHide()">
                                <span></span>
                            </div>
                        </div>
                        <p class="log_in">Войти</p>
                        <form class="log_in__form" action="auth.php" method="post">
                            <input placeholder="ИМЯ ПОЛЬЗОВАТЕЛЯ" name="login" id="login" type="text">
                            <input placeholder="ПАРОЛЬ" id="password" type="password" name="password">
                            <a href="#" class="password-control"></a>
                            <input type="submit" name="submit" id="submit" value="ВОЙТИ" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script>
        //     $(document).ready(function() {
        //     $('#submit').on('click', function() {
        //         var titleValue = $('#login').val();
        //         var contentValue = $('#password').val();

        //         $.ajax({
        //                 method: "POST",
        //                 url: "auth.php",
        //                 data: {
        //                     title: login,
        //                     content: password
        //                 }
        //             })
        //             .done(function() {

        //             });
        //         // $('input.title').val("");
        //         // $('#content').val("");
        //     }
        //     )

        // });
    </script>
</body>

</html>