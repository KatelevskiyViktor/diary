
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Упрощённый дневник</title>

    <script src="script/jquery-3.5.1.min.js"></script>
    <script src="script/jquery.easing.1.3.js"></script>
    <script src="script/jquery.bpopup.min.js"></script>
    <script src="script/functions.js"></script>
    <script src="script/script_dl.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include __DIR__.'/nav_menu.php';?>
<div class="container">


        <div id="hello">
            <img id="fatCat" src="img/cat2.gif" height="250">
            <h1>Привет=)))</h1>
            <p>Как твоё настроение? Как прошла неделя?</p>
            <textarea name="mood" class="textMode"></textarea>
            <br>
            <a class="button"></a>
        </div>
        <div id="meditation">
            <img class="fatCat2" src="img/fattyCatRelax.gif" height="250">
            <h1>Chiiiiiill</h1>
            <br>
            <p>Быть может немного расслабимся, перед началом работы? Говорят она после этого лучше идёт =)))</p>
            <br>
            <div class="accordeon">
                <div class="acc-head">
                    <b>Вариант I</b>
                </div>
                <div class="acc-body">
                    Медитация передышка<br>
                    <audio controls>
                        <source src="audio/meditation_respite.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="acc-head">
                    <b>Вариант II</b>
                </div>
                <div class="acc-body">
                    Вот вам музыка для вашего варианта медитации =) Либо: Сядьте на стул,
                    стопы паралельно полу, колени образуют прямой угол, спина вместе с шеей образует прямую линию.
                    Руки расслаблены, лежат на коленях.(если есть проблемы со спиной, лягте на коврик для йоги)
                    Закройте глаза, расслабтесь.
                    Наблюдайте за тем как дышит ваше тело, не вмешиваясь. Если появляются мысли которые уводят ваше внимание,
                    мягко верните себя от них к дыханию. Вначале это может сложно даваться, но по мере развития навыка
                    справляться станет легче. Уделите на это на эту практику столько времени сколько вам захочется.
                    Можете воспользоваться музыкой ниже, либо делать это в тишине.<br>
                    <iframe src="https://www.youtube.com/embed/hn319G-Mndc" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <br>
                    Или...
                    <br>
                    <iframe src="https://www.youtube.com/watch?v=_klKJzo4LTY&ab_channel=LennyRossolovski" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <br>
                    Или...
                    <br>
                    <audio controls>
                        <source src="audio/singing_cup.mp3" type="audio/mpeg">
                    </audio>
                    <br>
                    ...или возьми свою...;)
                </div>
                <div class="acc-head">
                    <b>Вариант III</b>
                </div>
                <div class="acc-body">
                    Прогрессивная мышечная релаксация по Э.Джекобсону
                    <br>
                    Часть I
                    <br>
                    <iframe src="//vk.com/video_ext.php?oid=1375294&id=456239214&hash=560fe43694b037b5&hd=2"
                             frameborder="0" allowfullscreen></iframe>
                    <br>
                    Часть II
                    <br>
                    <iframe src="//vk.com/video_ext.php?oid=1375294&id=456239215&hash=eeec6b435e39f533&hd=2"
                             frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="acc-head">
                    <b>Вариант IV</b>
                </div>
                <div class="acc-body">
                    Медитация сострадания
                    <br><br>

                    Барбара Фредриксон, руководитель лаборатории позитивных эмоций и психофизиологии Университета Северной Каролины в Чапел-Хилл, на протяжении всей карьеры изучает любовь и принятие. В своей книге Love 2.0 («Любовь 2.0») она приводит описание медитации, которую называет «медитацией любящей доброты», или «медитацией сострадания». Результаты ее выполнения в лаборатории показали, что она повышает самопринятие, снижает депрессию и улучшает отношения.

                    Для выполнения медитации сострадания найдите спокойное и удобное место. Сделайте несколько вдохов и выдохов, установив медленный, глубокий ритм. Произнесите следующие фразы:

                    <br><br>Да пребудет со мной безопасность!<br>

                    Да пребудет со мной счастье!<br>

                    Да пребудет со мной здоровье!<br>

                    Да пребудет со мной покой!<br><br>

                    Затем пожелайте того же своему другу:

                    <br> <br>Да пребудет с ним (с ней) безопасность!<br>

                    Да пребудет с ним (с ней) счастье!<br>

                    Да пребудет с ним (с ней) здоровье!<br>

                    Да пребудет с ним (с ней) покой!<br><br>

                    Следуя этому же сценарию, пожелайте того же нейтральному человеку, а затем человеку, к которому испытываете неприязнь. И наконец, пожелайте того же всему миру:

                    <br><br>Да пребудет с нами безопасность!<br>

                    Да пребудет с нами счастье!<br>

                    Да пребудет с нами здоровье!<br>

                    Да пребудет с нами покой!<br><br>

                    Благодаря спокойной позе и глубокому дыханию вы снижаете уровень возбуждения нервной системы и становитесь уравновешеннее. Посылая сострадание себе и всему миру, вы к ощущению покоя прибавляете отзывчивость. Вы учите свой мозг устанавливать связь между этими двумя состояниями; другими словами, используете второе правило изменения мозга*, соединяя воедино эти два нейронных пути. Если ваш мозг был настроен на поспешные суждения, это упражнение покажет ему, как извлекать пользу из добрых пожеланий.

                    Проводя медитацию единства и сострадания по отношению к себе и другим, вы расширяете (в психологическом и неврологическом смысле) знания о том, что мы не одиноки в этом мире. Когда люди регулярно выполняют медитацию сострадания, с ними происходят поразительные перемены. Через несколько недель эта мысль начинает конкурировать с проторенными нейронными путями, которые заставляют вас думать: «Я не являюсь частью чего-то большего». Другой нейронный путь (тот самый, который очень долго был слабым) начинает напоминать вам, что вы — часть этого мира и все мы в нем взаимозависимы. Мы можем обижать и исцелять друг друга. А один из лучших способов развития — делать это в рамках наших отношений.


                    <br>
                </div>
            </div>

            <br>
            <a class="button_left"></a>
            <a class="button_right"></a>

        </div>
        <div id="diary">
            <img class="fatCat2" src="img/fattyCatAndSloth.gif" height="250">
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


                    <img width="150" height="150" class="load" src="img/loading.gif">
                    <h2 class="send"><b>Ok! Всё получилось =)</b></h2>


                    <div class="email_to_psy">
                        <img src="img/cat_inter_text_in_laptop.gif" width="200">
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
    </div>

</body>
</html>