<?php require_once __DIR__.'/blocks/header.php'?>
<?php require_once __DIR__.'/blocks/hm.php'?>
        <div id="diary">
            <img class="fatCat2" src="<?= PATH ?>/img/fattyCatAndSloth.gif" height="250">
            <h1>Приступим!</h1>
            <div class="accordeon">
                <div class="acc-head">
                    <b>Когда это произошло?</b>
                </div>
                <div class="acc-body">
                    <input name="daterec" value="<?php echo date('Y-m-d'); ?>"  class="dataDairy textMode" type="date">
                </div>
                <div class="acc-head">
                    <b>Как выглядит ситуация?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE1">Пример?
                            Нажми меня ;)</span></b><br>
                    <span class="example e1"> Джоанна на меня накричала.</span>
                    <textarea name="situation" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что подумал(а) или представил(а)?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE2">Пример? Нажми меня ;)</span><br>
                    <span class="example e2">Она никогда мне больше не позвонит.</span>
                    <textarea name="cognition" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Почему я думаю, что всё это действительно так?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE3">Пример? Нажми меня ;)</span></b><br>
                    <span class="example e3">Она очень разозлилась.</span>
                    <textarea name="dispute1" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Почему может оказаться, что всё не совсем так или совсем не так? </b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE4">Пример?Нажми меня ;)</span></b><br>
                    <span class="example e4">Она и раньше на меня злилась, но потом успокаивалась.</span>
                    <textarea name="dispute2" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Как ещё можно объяснить случившееся?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE5">Пример?Нажми меня ;)</span></b><br>
                    <span class="example e5">Она вспльчивая, но отходчивая.</span>
                    <textarea name="dispute3" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что худшее может случится и что я в таком случае сделаю?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE6">Пример?Нажми меня ;)</span></b><br>
                    <span class="example e6">Я потеряю лучшего друга.
                        Придётся сосредоточиться на общении с другими друзьями</span>
                    <textarea name="dispute4" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что самое лучшее может случиться?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE7">Пример?Нажми меня ;)</span></b><br>
                    <span class="example e7">Она сейчас же перезвонит и извинится.</span>
                    <textarea name="dispute5" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что, скорее всего, случиться?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE8">Пример?Нажми меня ;)</span></b><br>
                    <span class="example e8">Пару дней она будет вести себя холодно, но потом я ей позвоню.</span>
                    <textarea name="dispute6" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что случиться, если я буду продолжать повторять себе эту мысль?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hE9">Пример?Нажми меня ;)</span></b><br>
                    <span class="example e9">Я продолжу расстраиваться.</span>
                    <textarea name="dispute7" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что может случится, если я изменю образ мыслей?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hEq">Пример?Нажми меня ;)</span></b><br>
                    <span class="example eq">Я почувствую себя лучше, может, раньше ей позвоню.</span>
                    <textarea name="dispute8" class="textMode1"></textarea>
                </div>
                <div class="acc-head">
                    <b>Что бы я посоветовал(а) другу если бы это случилось бы с ней(им)?</b>
                </div>
                <div class="acc-body">
                    <span class="headerExample hEw">Пример?Нажми меня ;)</span></b><br>
                    <span class="example ew">Эмили, не волнуйся, просто подожди два дня и возвони сама.</span>
                    <textarea name="dispute9" class="textMode1"></textarea>
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