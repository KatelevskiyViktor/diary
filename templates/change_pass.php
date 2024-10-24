<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Смена пароля</title>
    <link rel="stylesheet" href="<?= PATH ?>/css/reset.min.css">
    <link rel="stylesheet" href="<?= PATH ?>/css/style_auth.css">

    <script src="<?= PATH ?>/script/jquery-3.5.1.min.js"></script>
    <script src="<?= PATH ?>/script/functions.js"></script>
    <script src="<?= PATH ?>/script/script_change_pass.js"></script>

</head>
<body>
<!-- Form-->
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <form class="form_auth">
            <div class="form-header">
                <h1>Смена пароля</h1>
            </div>
            <div class="form-content">
                <div class="form-group">
                    <input type="email" class="change_pass_email"
                           placeholder="Введите адрес электронной почты" id="email" name="email"/>
                </div>

                <p class="load"><img width="150" height="150" src="<?= PATH ?>/img/loading.gif"></p>
                <h2 class="send"></h2>
                <div class="form-group">
                    <button disabled class="change_pass_butt" type="button">Отправить</button>
                </div>
            </div>
        </form>
    </div>

</div>
</body>
</html>
