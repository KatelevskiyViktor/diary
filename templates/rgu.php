<?php require_once __DIR__.'/blocks/header.php'?>
<div id="hello">
    <img class="fatCat2" src="<?= PATH ?>/img/tenor.gif" height="250">
    <h1>А тут у нас работа с глубинным убежеднием...Приступим! =)</h1>
    <div class="accordeon">
        <div class="acc-head">
            <b>Введите дату заполнения.</b>
        </div>
        <div class="acc-body">
            <input name="daterec" value="<?php echo date('Y-m-d'); ?>" class="dataDairy textMode" type="date">
        </div>
        <div class="acc-head">
            <b>Напишите, почему в течении дня вы считаете ваше ГУ верным. Затем, следом,
                через запятую, напишите почему это не так.</b>
        </div>
        <div class="acc-body">
            <span class="headerExample hE2">Пример? Нажми меня ;)</span><br>
            <span class="example e2">
                    Старое ГУ "Я неспособная":<br>
                            1. Не пошла к ассистенут преподавателя за помощью, НО это не значит, что я неспособная.
                    Я нервничала, так как считала, что во всём должна бала разобраться сама, и боялась, что он подумает,
                    будто я плохо подготовилась.<br>
                    2. Получила "хорошо" за доклад по литературе, НО это нормальная оценка. Если бы я и правда была неспособной,
                    я бы даже не поступила в этот колледж.<br>
                        </span>

            <textarea name="cognition" class="textMode1"></textarea>
        </div>
        <div class="acc-head">
            <b>Напишите, почему в течении дня вы считаете ваше ГУ  не верным</b>
        </div>
        <div class="acc-body">
            <span class="headerExample hE5">Пример? Нажми меня ;)</span></b><br>
            <span class="example e5">
                     Новое ГУ "Я способная, но я всего лишь человек":<br>
                    1. Хорошо написала доклад по литературе.<br>
                2. Задала вопрос на занятии по статистике<br>
                    3. Приняла необходимые решения по поводу будущего года.<br>
                    4. Организовала смену телефона, банковского счёта, страховки и т.п.<br>
                </span>
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


</div>
<?php require_once __DIR__.'/blocks/footer.php'?>
