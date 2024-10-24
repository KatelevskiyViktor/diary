<?php require_once __DIR__.'/blocks/header.php'?>
<?php require_once __DIR__.'/blocks/hm.php'?>
    <div id="diary">
        <img class="fatCat2" src="<?= PATH ?>/img/bliez.gif" height="250">
        <h1>Приступим!</h1>
        <div class="accordeon">
            <div class="acc-head">
                <b>Введите дату события.</b>
            </div>
            <div class="acc-body">
                <input name="daterec" value="<?php echo date('Y-m-d'); ?>" class="dataDairy textMode" type="date">
            </div>
            <div class="acc-head">
                <b>Какие мысли и / или образы у вас возникли? На сколько вы
                    были убеждены (0 - 100%) в
                    каждой / каждом из них? [по желанию]:К какой категории когнитивных искажений относится ваша мысль и / или образ?</b>
            </div>
            <div class="acc-body">
                <span class="headerExample hE2">Пример? Нажми меня ;)</span><br>
                <span class="example e2">
                            Мысль: Он не захочет пойти со мной на свидание.
                            <br> Убеждённость: 70%<br>
                            [предсказание и чтение мыслей]<br>
                        </span>
                <span class="headerExample ci">Про когнитивные искажения, жми сюда ;)</span>
                <img class="wheel_emotion" src="<?= PATH ?>/img/wheel_of_the_emotion.jpg" width="550">
                <textarea name="cognition" class="textMode1"></textarea>
            </div>
            <div class="acc-head">
                <b>Исползуя вопросы ниже, чтобы сформулировать ответ на автоматические мысли:<br>
                    <span class="question2">1) Каковы доказательства того, что ваша автоматическая мысль верна?
                        А того что она не верна?<br>
                    2) Можно ли дать альтернативное объяснение сложившейся ситуации?<br>
                    3) Что худшее может произойти? Как я с этим справлюсь?
                    Что самое лучшее может произойти? А какое развитие событий наиболее реалистичное?<br>
                    4) Каковы последствия моей убеждённости в автоматической мысли? <br>
                    Что случиться если я изменю свой образ мысли?<br>
                    5) Что мне стоит сделать?<br>
                    6) Если бы _____ [имя друга] попал в аналогичную ситуацию и рассуждал так же, <br>
                        как я сейчас, что бы я ему посоветовал?</span></b>
            </div>
            <div class="acc-body">
                <span class="headerExample hE5">Пример? Нажми меня ;)</span></b><br>
                <span class="example e5">
                        * не все вопросы могут подойти к вашей ситуации<br>
                            1) Я не знаю, захочет он или нет (90%).
                            Он приветлив со мной на занятиях (90%)<br>
                            2) -<br>
                            3) Худшее, что он может случиться: он скажет, что не хочет, и мне какое-то время
                        будет неприятно, но я смогу обсудть это с подругой (90%)
                            Лучше всего будет, если он согласится (100%)
                            Скорее всего, он скажет, что занят, но всё равно останется приветливым (80%)<br>
                            4) Если я продолжу думать, что он не захочет, то просто его не приглашу (100%)<br>
                            5) Мне нужно просто подойти к нему и начать разговор (50%)<br>
                            Да и не так уж всё это важно, в конце концов (75%)<br>
                            6) -
                        <br></span>
                <textarea name="dispute" class="textMode1"></textarea>
            </div>

        </div>


        <img width="150" height="150" class="load" src="<?= PATH ?>/img/loading.gif">
        <h2 class="send"><b>Ok! Всё получилось =)</b></h2>


        <div class="email_to_psy">
            <img src="<?= PATH ?>/img/cat_inter_text_in_laptop.gif" width="200">
            <input id="mtp_input"  type="email" name="psy_email" placeholder="Введите адрес психолога..."><br><br>
            <input id="mtp_submit" disabled type="submit">
        </div>



        <br>

        <button class="to_psycho">Отправить психологу</button>
        <button class="save_to_archive">Сохранить в архив</button>
        <button class="res_to_new">Очистить поля</button>
        <br>
        <a class="button_left2"></a>

    </div>
<?php require_once __DIR__.'/blocks/footer.php'?>