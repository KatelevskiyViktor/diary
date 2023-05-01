<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Архив</title>
    <script src="script/jquery-3.5.1.min.js"></script>
    <script src="script/jquery.easing.1.3.js"></script>
    <script src="script/jquery.bpopup.min.js"></script>
    <script src="script/functions.js"></script>
    <script src="script/script_arch.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include __DIR__.'/nav_menu.php';?>
<div class="container">


    <div id="hello">
        <img class="fatCat2" src="img/coffie.gif" height="250">
        <h1>Посмотрим, что тут у нас в архивчеке =)</h1>

        <p><b>Дневник</b></p>

        <div class="accordeon">
            <?php foreach ($this->records as $record){?>
            <div class="acc-head id<?php echo $record->id;?>">
                <b data-name="date_sit<?php echo $record->id;?>"><?php echo $record->daterec . ' | ' . substr($record->situation, 0, 50) . '...';?></b>
            </div>
            <div class="acc-body id<?php echo $record->id;?>">
                <b>Моё настроение в тот день:</b><br>
                <p data-name="daterec<?php echo $record->id;?>" hidden><?php echo $record->daterec; ?></p>
                <p data-name="mood<?php echo $record->id;?>"><?php echo $record->mood;?></p>
                <b>Ситуация:</b><br>
                <p data-name="situation<?php echo $record->id;?>"><?php echo $record->situation;?></p>
                <b>Мысли:</b><br>
                <p data-name="cognition<?php echo $record->id;?>"><?php echo $record->cognition;?></p>
                <b>Реакции:</b><br>
                <p data-name="reaction<?php echo $record->id;?>"><?php echo $record->reaction;?></p>
                <b>Оценка мыслей:</b><br>
                <p data-name="dispute<?php echo $record->id;?>"><?php echo $record->dispute;?></p>
                <b>Результат:</b><br>
                <p data-name="result<?php echo $record->id;?>"><?php echo $record->result;?></p>
                <button class="to_psycho" data-mark="d" data-record-id="<?php echo $record->id;?>">Отправить мозгоправу</button>
                <button class="edit_record" data-record-id="<?php echo $record->id;?>">Исправить косяки</button>
                <button class="del_record" data-record-id="<?php echo $record->id;?>">Изнечтожить запись!</button>
            </div>
            <?php }?>
        </div>

        <br>
        <button id="more">Подгрузить ещё?</button>
        <br>
        <br>
        <hr>
        <hr>




        <p><b>Упрощённый дневник</b></p>

        <div class="accordeon2">
            <?php foreach ($this->records_dl as $record){?>
                <div class="acc-head2 id_dl<?php echo $record->id;?>">
                    <b data-name="ds_dl<?php echo $record->id;?>"><?php echo $record->daterec . ' | ' . substr($record->situation, 0, 50) . '...';?></b>
                </div>
                <div class="acc-body2 id_dl<?php echo $record->id;?>">
                    <p data-name="daterec_dl<?php echo $record->id;?>" hidden><?php echo $record->daterec; ?></p>
                    <b>Моё настроение в тот день:</b><br>
                    <p data-name="mood_dl<?php echo $record->id;?>"><?php echo $record->mood;?></p>
                    <b>Ситуация:</b><br>
                    <p data-name="situation_dl<?php echo $record->id;?>"><?php echo $record->situation;?></p>
                    <b>Мысли:</b><br>
                    <p data-name="cognition_dl<?php echo $record->id;?>"><?php echo $record->cognition;?></p>
                    <b>Оценка мыслей:</b><br>
                    <p data-name="dispute_dl<?php echo $record->id;?>"><?php echo $record->dispute;?></p>
                    <button class="to_psycho" data-mark="dl" data-record-id="<?php echo $record->id;?>">Отправить мозгоправу</button>
                    <button class="er_dl" data-record-id="<?php echo $record->id;?>">Исправить косяки</button>
                    <button class="del_record_dl" data-record-id="<?php echo $record->id;?>">Изнечтожить запись!</button>
                </div>
            <?php }?>
        </div>

        <br>
        <button id="more_dl">Подгрузить ещё?</button>
        <br>
        <br>
        <hr>
        <hr>

        <p><b>Блиц</b></p>

        <div class="accordeon3">
            <?php foreach ($this->records_bl as $record){?>
                <div class="acc-head3 id_bl<?php echo $record->id;?>">
                    <b data-name="ds_bl<?php echo $record->id;?>"><?php echo $record->daterec . ' | ' . substr($record->cognition, 0, 50) . '...';?></b>
                </div>
                <div class="acc-body3 id_bl<?php echo $record->id;?>">
                    <p data-name="daterec_bl<?php echo $record->id;?>" hidden><?php echo $record->daterec; ?></p>
                    <b>Моё настроение в тот день:</b><br>
                    <p data-name="mood_bl<?php echo $record->id;?>"><?php echo $record->mood;?></p>
                    <b>Мысли:</b><br>
                    <p data-name="cognition_bl<?php echo $record->id;?>"><?php echo $record->cognition;?></p>
                    <b>Оценка мыслей:</b><br>
                    <p data-name="dispute_bl<?php echo $record->id;?>"><?php echo $record->dispute;?></p>
                    <button class="to_psycho" data-mark="bl" data-record-id="<?php echo $record->id;?>">Отправить мозгоправу</button>
                    <button class="er_bl" data-record-id="<?php echo $record->id;?>">Исправить косяки</button>
                    <button class="del_record_bl" data-record-id="<?php echo $record->id;?>">Изнечтожить запись!</button>
                </div>
            <?php }?>
        </div>

        <br>
        <button id="more_bl">Подгрузить ещё?</button>
        <br>
        <br>
        <hr>
        <hr>

        <p><b>РГУ</b></p>

        <div class="accordeon4">
            <?php foreach ($this->records_rgu as $record){?>
                <div class="acc-head4 id_rgu<?php echo $record->id;?>">
                    <b data-name="ds_rgu<?php echo $record->id;?>"><?php echo $record->daterec . ' | ' . substr($record->cognition, 0, 50) . '...';?></b>
                </div>
                <div class="acc-body4 id_rgu<?php echo $record->id;?>">
                    <p data-name="daterec_rgu<?php echo $record->id;?>" hidden><?php echo $record->daterec; ?></p>
                    <b>В каких ситуациях, в течении суток моё
                        глубинное убежедние можно назвать вернум, НО! почему это не так:</b><br>
                    <p data-name="cognition_rgu<?php echo $record->id;?>"><?php echo $record->cognition;?></p>
                    <b>В каких ситуациях, в течении суток моё глубинное убежедние можно назвать не верным:</b><br>
                    <p data-name="dispute_rgu<?php echo $record->id;?>"><?php echo $record->dispute;?></p>
                    <button class="to_psycho" data-mark="rgu" data-record-id="<?php echo $record->id;?>">Отправить мозгоправу</button>
                    <button class="er_rgu" data-record-id="<?php echo $record->id;?>">Исправить косяки</button>
                    <button class="del_record_rgu" data-record-id="<?php echo $record->id;?>">Изнечтожить запись!</button>
                </div>
            <?php }?>
        </div>

        <br>
        <button id="more_rgu">Подгрузить ещё?</button>
        <br>
        <br>
        <hr>
        <hr>

        <div class="edit_form_to_arch_rec">
            <img src="img/edit_text.gif" width="200"><br>
            <b>Моё настроение в тот день:</b><br>
            <textarea name="mood" class="textMode1"></textarea><br>
            <b>Ситуация:</b><br>
            <textarea name="situation" class="textMode1"></textarea><br>
            <b>Мысли:</b><br>
            <textarea name="cognition" class="textMode1"></textarea><br>
            <b>Реакции:</b><br>
            <textarea name="reaction" class="textMode1"></textarea><br>
            <b>Оценка мыслей:</b><br>
            <textarea name="dispute" class="textMode1"></textarea><br>
            <b>Результат:</b><br>
            <textarea name="result" class="textMode1"></textarea>
            <br>
            <br>
            <input class="edit_sub" type="submit" value="Изменить">
        </div>

        <div class="are_you_want_to_del">
            <img src="img/del_or_not.gif" width="200"><br>
            <span>Ты уверен(а), что с записью пора расстаться?</span><br><br>
            <button class="del_yes">Голову с плеч!</button>
            <button class="del_no">Я передумал(а)</button>
        </div>

        <div class="success_mail">
            <img width="150" height="150" src="img/loading.gif">
            <h2 class="mess"></h2>
        </div>


        <div class="mtp_arch">
            <img src="img/cat_inter_text_in_laptop.gif" width="200">
            <input id="mtp_input"  type="email" name="psy_email" placeholder="Введите адрес психолога..."><br><br>
            <input id="mtp_submit" disabled type="submit">
        </div>
    </div>

    </div>
</body>
</html>
