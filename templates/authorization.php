<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход в дневник</title>

    <link rel="stylesheet" href="css/reset.min.css">
    <link rel="stylesheet" href="css/style_auth.css">

    <meta name="description" content="Все версии когнитивно-поведенческого дневника: полная форма, упрощенная форма, блиц. А так же бланк работы с глубинными убеждениями РГУ.">
    <script src="script/jquery-3.5.1.min.js"></script>
    <script src="script/jquery.cookie-1.4.1.min.js"></script>
    <script src="script/functions.js"></script>
    <script src="script/script_auth.js"></script>



</head>

<body>
<div class="bubay">
    <a href="https://www.donationalerts.com/r/viknika" class="bu_tech ">Понравилось? Поддержи! Задонать 😊</a>
    <span class="close_ad">⮿</span>
</div>
<!-- Form-->
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <form>
        <div class="form-header">
            <h1>Вход в дневник</h1>
        </div>
        <div class="form-content">
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username" class="ent_uname" name="username" required="required"/>
                </div>
                <div class="form-group pass">
                    <label for="password">Пароль</label>
                    <input type="password" class="ent_pass password" id="password" name="password" required="required"/>
                    <a class="password-control"></a>
                </div>
                <div class="form-group">
                    <label class="form-remember">
                        <input class="rem_me" type="checkbox"/>Запомнить меня
                    </label>
                    <a class="form-recovery" href="/?ctrl=ChangePass">Забыли пароль?</a>

                </div>
                <p class="load"><img width="150" height="150" src="img/loading.gif"></p>
                <h2 class="send"></h2>
                <div class="form-group">
                    <button class="ent_butt" disabled type="button">Войти</button>
                </div>
            <a class="form-recovery reg_link" >Зарегистрироваться?</a>
        </div>
        </form>
    </div>
    <div class="form-panel two">

        <form>

        <div class="form-header">
            <h1>Регистрация</h1>
        </div>
        <div class="form-content">
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username"
                           class="username reg_user" name="username" />
                    <p class="hid er">Имя должно быть не менее 3-х сиволов на латинице</p>
                </div>
                <div class="form-group pass1">
                    <label for="password">Пароль</label>
                    <input type="password"
                           class="password1 reg_pass" id="password" name="password"/>
                    <a class="password-control1"></a>
                    <p class="hid er">Пароль должен включать в себя: спецсимволы, большие и маленькие буквы, цыфры. Пример пароля: +Exemple_65!g</p>
                </div>
                <div class="form-group cpass pass1">
                    <label for="cpassword">Повторите пароль</label>
                    <input type="password" id="cpassword" class="password1 reg_cpass cpassword" name="cpassword"/>
                    <a class="password-control1"></a>
                    <p class="hid er">Пароли не совпадают</p>
                </div>
                <div class="form-group">
                    <label for="email">Эл. почта</label>
                    <input type="email" class="reg_email" id="email" name="email" />
                    <p class="hid er">Адрес почты почты не соответствует формату: exemple@gmail.com</p>
                </div>
                <p class="load"><img width="150" height="150" src="img/loading.gif"></p>
                <h2 class="send"></h2>
                <div class="form-group">
                    <button type="button" disabled id="submit_reg">Зарегистрироваться</button>
                </div>
        </div>
        <div class="tooltip-block"></div>
        </form>
    </div>
</div>
<div class='say_my_name'><span>Made by @karpendiaZz(telegram)</span></div>

</body>
</html>

