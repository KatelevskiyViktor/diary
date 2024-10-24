let pattern_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[ -/:-@\[-`{-~]).{6,64}$/;
let pattern_mail = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
let pattern_name = /[a-zA-Z0–9]{3,}/;
let to_val = {name: false,pass: false, mail: false, cpass: false};
let for_cpass_univ = {first_sel:'', second_sel:'', mark:'', but:''};
let but_en_dis = {};



function leaf_diary_block() {
    let hello = $('#hello');
    let diary = $('#diary');
    let meditation = $('#meditation');

    leaf_page($('.button'), hello, meditation);
    leaf_page($('.button_left'), meditation, hello);
    leaf_page($('.button_right'), meditation, diary);
    leaf_page($('.button_left2'), diary, meditation);
}

function leaf_page( but, section1, section2) {
    but.on('click', function () {
        section1.hide('fade');
        section2.show('fade');
    })
}

function popup_windows(span_header, slide) {
    span_header.on('click', function () {
        slide.bPopup({
            speed: 450,
            transition: 'slideDown',
            easing: 'easeOutBack',

        });
    });
}


function view_exemple() {
    $('.headerExample').on('click', exemple);
}

function exemple() {
    let temp = '.e' + this.className.slice(-1);
    $(temp).toggle('slow');
}


function accordion_animation(select, select2) {
    $(select).off('click');
    $(select).on('click', function () {
        $(select2).not($(this).next()).slideUp(1000);
        $(this).next().slideToggle(2000);
    });
}


function mail_to_psycho(url) {
    $('.to_psycho').on('click',function() {
        check_emil('#mtp_input', '#mtp_submit');
        $('.email_to_psy').bPopup(
            {
                position: ['auto', 100]
            }
        );
        mail_psy_to_ajax(url);


    });
}

function ajax_db_handler(butt, selec, url) {
    $(butt).on('click', function () {
        ajax_request(selec, url);
    });
}

function mail_psy_to_ajax(url) {
    $('#mtp_submit').off('click');
    $('#mtp_submit').on('click', function () {
        ajax_request('.textMode, .textMode1, #mtp_input', url);
        $('.email_to_psy').bPopup().close();
    });
}

function check_emil(select, button) {

    $(select).on('input',function () {
        if(pattern_mail.test($(select).val())) {
            $(button).removeAttr('disabled', false);
        }else if(!pattern_mail.test($(button).val())) {
            $(button).attr('disabled', true);
        }
    });


}


function view_pass(sel1, sel2) {
    $(sel1).on('click', function(){
        if ($(sel2).attr('type') === 'password'){
            $(sel1).addClass('view');
            $(sel2).attr('type', 'text');
        } else {
            $(sel1).removeClass('view');
            $(sel2).attr('type', 'password');
        }
        return false;
    });
}

function cpass_univ() {

    if($(for_cpass_univ.first_sel).val() === $(for_cpass_univ.second_sel).val())
    {
        $(for_cpass_univ.second_sel).removeClass('inval');
        $(for_cpass_univ.second_sel).addClass('val');
        $(for_cpass_univ.second_sel).nextAll('p').addClass('hid');
        but_en_dis[for_cpass_univ.mark] = true;

    }else{
        $(for_cpass_univ.second_sel).addClass('inval');
        $(for_cpass_univ.second_sel).removeClass('val');
        $(for_cpass_univ.second_sel).nextAll('p').removeClass('hid');
        but_en_dis[for_cpass_univ.mark] = false;
    }
    reg_but_dis_or_en_univ(for_cpass_univ.but);
}

function check_input_cpass_univ(second_pass) {
    $(second_pass).on('input', cpass_univ);
}

function reg_but_dis_or_en_univ(but) {
    let i = 0;
    for(let key in but_en_dis){
        if(but_en_dis[key] === true)i++;
    }
    if(i === Object.keys(but_en_dis).length){
        $(but).removeAttr('disabled', false);
    }else{
        $(but).attr('disabled', true);
    }
}

function check_input_universal(inp, pat, mark, first_sel, but) {
    $(inp).on('input',function () {
        if(pat.test($(this).val()))
        {
            $(this).removeClass('inval');
            $(this).addClass('val');
            $(this).nextAll('p').addClass('hid');
            but_en_dis[mark] = true;

        }else{
            $(this).addClass('inval');
            $(this).removeClass('val');
            $(this).nextAll('p').removeClass('hid');
            but_en_dis[mark] = false;
        }

        reg_but_dis_or_en_univ(but);

        if(inp === first_sel)cpass_univ();
    });
}




function check_input(inp, pat, mark) {
    $(inp).on('input',function () {
        if(pat.test($(inp).val()))
        {
            $(this).removeClass('inval');
            $(this).addClass('val');
            $(this).nextAll('p').addClass('hid');
            to_val[mark] = true;

        }else{
            $(this).addClass('inval');
            $(this).removeClass('val');
            $(this).nextAll('p').removeClass('hid');
            to_val[mark] = false;
        }

        reg_but_dis_or_en();

        if(inp === '.password1')cpass();
    });
}

function check_input_one_field(inp, pat, but) {
    $(inp).on('input',function () {
        if(pat.test($(inp).val()))
        {
            $(this).removeClass('inval');
            $(this).addClass('val');
            $(but).removeAttr('disabled', false);

        }else{
            $(this).addClass('inval');
            $(this).removeClass('val');
            $(but).attr('disabled', true);
        }
    });
}

function cpass() {
    let sel = '.cpassword'
    if($(sel).val() === $('.password1').val())
    {
        $(sel).removeClass('inval');
        $(sel).addClass('val');
        $(sel).nextAll('p').addClass('hid');
        to_val['cpass'] = true;

    }else{
        $(sel).addClass('inval');
        $(sel).removeClass('val');
        $(sel).nextAll('p').removeClass('hid');
        to_val['cpass'] = false;
    }
    reg_but_dis_or_en();
}


function check_input_cpass() {
    $('.cpassword').on('input', cpass);

}

function reg_but_dis_or_en() {
    if(to_val.name && to_val.cpass && to_val.mail && to_val.pass) {
        $('#submit_reg').removeAttr('disabled', false);
    }else{
        $('#submit_reg').attr('disabled', true);
    }
}

function check_form() {
    check_input('.username', pattern_name, 'name');
    check_input('.password1', pattern_pass, 'pass');
    check_input('#email', pattern_mail, 'mail');
    check_input_cpass();
}

function ajax_request(select, url) {
    let form_data = $(select).serialize();
    $.ajax({
        type: 'POST',
        url: url,
        data: form_data,
        beforeSend:function () {
            $('.load').slideDown(3000);
        },
        success:function(data){
            $('.load').slideUp(3000);
             if(data.slice(-3) === 'msg' || data.slice(-3) === 'rbt'){
                setTimeout(function () {
                    $('.send').html('<b>' + data.slice(0, -3) + '</b>').fadeIn(3000).fadeOut(3000);
                }, 4000);
                if(data.slice(-3) === 'rbt')setTimeout(function () {document.location.replace("/");},
                    9000);
            }else {
                setTimeout(function () {
                    $('.send').html('<b>Ok! Всё получилось =)</b>').fadeIn(3000).fadeOut(3000);
                }, 4000);

            }
        },
    });
}

function script_to_nav_menu() {
    $("#navToggle").click(function() {
        $(this).toggleClass("active");
        $(".overlay").toggleClass("open");
        $("body").toggleClass("locked");
    });
    $('.overlay').click(function() {
        $(this).removeClass('open');
        $('.navBurger').removeClass('active');
    });
}

function add_by_scroll_diary(acc, sec_sel) {

    let startFrom = 10;

    $('#more').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"startFrom" : startFrom},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
                $.each(data, function(index, data){
                    $('.accordeon').append(
                        '<div class="acc-head"><b>'+ data.daterec + ' | ' + data.situation.substr(0, 50)
                        + '...' + '</b>' +
                        '</div>' +
                        '<div class="acc-body"><b>Моё настроение в тот день:</b><br><p>'+ data.mood +
                        '</p>' +
                        '<b>Ситуация:</b><br><p>' + data.situation + '</p>'+
                        '<b>Мысли:</b><br><p>' + data.cognition + '</p>' +
                        '<b>Реакции:</b><br><p>' + data.reaction + '</p>' +
                        '<b>Оценка мыслей:</b><br><p>' + data.dispute + '</p>' +
                        '<b>Результат:</b><br><p>' + data.result + '</p>' + '</div>'
                    );
                });
                startFrom += 10;
                accordion_animation(acc, sec_sel);
            }});


    });
}

function add_by_scroll_diary_dl(acc, sec_sel) {

    let startFrom = 10;

    $('#more_dl').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"startFromDL" : startFrom},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
                $.each(data, function(index, data){
                    $('.accordeon2').append(
                        '<div class="acc-head2"><b>'+ data.daterec + ' | ' + data.situation.substr(0, 50)
                        + '...' + '</b>' +
                        '</div>' +
                        '<div class="acc-body2"><b>Моё настроение в тот день:</b><br><p>'+ data.mood +
                        '</p>' +
                        '<b>Ситуация:</b><br><p>' + data.situation + '</p>'+
                        '<b>Мысли:</b><br><p>' + data.cognition + '</p>' +
                        '<b>Оценка мыслей:</b><br><p>' + data.dispute + '</p>' + '</div>'
                    );
                });
                startFrom += 10;
                accordion_animation(acc, sec_sel);
            }});


    });
}

function add_by_scroll_diary_bl(acc, sec_sel) {

    let startFrom = 10;

    $('#more_bl').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"startFromBl" : startFrom},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
                $.each(data, function(index, data){
                    $('.accordeon3').append(
                        '<div class="acc-head3"><b>'+ data.daterec + ' | ' + data.cognition.substr(0, 50)
                        + '...' + '</b>' +
                        '</div>' +
                        '<div class="acc-body3"><b>Моё настроение в тот день:</b><br><p>'+ data.mood +
                        '</p>' +
                        '<b>Мысли:</b><br><p>' + data.cognition + '</p>' +
                        '<b>Оценка мыслей:</b><br><p>' + data.dispute + '</p>' + '</div>'
                    );
                });
                startFrom += 10;
                accordion_animation(acc, sec_sel);
            }});


    });
}

function add_by_scroll_diary_rgu(acc, sec_sel) {

    let startFrom = 10;

    $('#more_rgu').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"startFromRGU" : startFrom},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
                $.each(data, function(index, data){
                    $('.accordeon4').append(
                        '<div class="acc-head4"><b>'+ data.daterec + ' | ' + data.cognition.substr(0, 50)
                        + '...' + '</b>' +
                        '</div>' +
                        '<div class="acc-body4"><b>В каких ситуациях, в течении суток моё глубинное убежедние ' +
                        'можно назвать вернум, НО! почему это не так:' +
                        '</b><br><p>'+ data.cognition +
                        '</p>' +
                        '<b>В каких ситуациях, в течении суток моё ' +
                        'глубинное убежедние можно назвать не верным:</b><br><p>' + data.dispute + '</p>' + '</div>'
                    );
                });
                startFrom += 10;
                accordion_animation(acc, sec_sel);
            }});


    });
}



function reset_to_new_rec() {
    $('.res_to_new').on('click', function () {
        $('.textMode, .textMode1, #mtp_input').val('')
    })
}

function anim_to_auth() {
    let panelOne = $('.form-panel.two').height(),
        panelTwo = $('.form-panel.two')[0].scrollHeight;

    $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
        e.preventDefault();

        $('.form-toggle').addClass('visible');
        $('.form-panel.one').addClass('hidden');
        $('.form-panel.two').addClass('active');
        $('.form').animate({
            'height': panelTwo + 80
        }, 200);
    });

    $('.form-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).removeClass('visible');
        $('.form-panel.one').removeClass('hidden');
        $('.form-panel.two').removeClass('active');
        $('.form').animate({
            'height': panelOne
        }, 200);
    });
}

function remember_me() {

    let pass = $('.ent_pass');
    let user = $('.ent_uname');

    user.val($.cookie('username'));
    pass.val($.cookie('password'));

    $( '.rem_me' ).on("change", function() {
        if(this.checked === true)
        {
            $.cookie('username', user.val(), {expires: 7});
            $.cookie('password', pass.val(), {expires: 7});
        }else if (this.checked === false) {
            $.removeCookie('username');
            $.removeCookie('password');
        }

    });

}

function reg_link() {
    $('.reg_link').on('click', function () {
        $('.form-panel.two').click();
    })
}

function edit_record() {

    $('.edit_record').click(function() {
        $('.diary_ef').bPopup();
        let id_rec = this.getAttribute('data-record-id');
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"id_rec" : id_rec},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            $('textarea[name="mood_diary"]').val(data.mood);
            $('textarea[name="situation_diary"]').val(data.situation);
            $('textarea[name="cognition_diary"]').val(data.cognition);
            $('textarea[name="reaction_diary"]').val(data.reaction);
            $('textarea[name="dispute_diary"]').val(data.dispute);
            $('textarea[name="result_diary"]').val(data.result);
            $('.diary_button').attr('data-id', data.id);
            save_edit_record(data, id_rec);
        });


    });
}

function save_edit_record(data, id){

    $('.diary_button').click(function() {

        let mood = $('textarea[name="mood_diary"]').val();
        let situation = $('textarea[name="situation_diary"]').val();
        let cognition = $('textarea[name="cognition_diary"]').val();
        let reaction = $('textarea[name="reaction_diary"]').val();
        let dispute = $('textarea[name="dispute_diary"]').val();
        let result = $('textarea[name="result_diary"]').val();

        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'id_rec_save' : id,
                    'daterec' : data.daterec,
                    'mood' : mood,
                    'situation' : situation,
                    'cognition' : cognition,
                    'reaction' : reaction,
                    'dispute' : dispute,
                    'result' : result,
                    'user_id' : data.user_id,
                    'user_name' : data.user_name
            },
        }).done(function(){
            $('b[data-name="date_sit'+ id +'"]').html(data.daterec + ' | ' + situation.slice(0, 50) + '...');
            $('p[data-name="mood'+ id +'"]').html(mood);
            $('p[data-name="situation'+ id +'"]').html(situation);
            $('p[data-name="cognition'+ id +'"]').html(cognition);
            $('p[data-name="reaction'+ id +'"]').html(reaction);
            $('p[data-name="dispute'+ id +'"]').html(dispute);
            $('p[data-name="result'+ id +'"]').html(result);
            $('.diary_ef').bPopup().close();
        });
    });
}

function edit_record_dl() {

    $('.er_dl').click(function() {
        $('.dl_ef').bPopup();
        let id_rec = this.getAttribute('data-record-id');
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"id_dl" : id_rec},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            $('textarea[name="mood_dl"]').val(data.mood);
            $('textarea[name="situation_dl"]').val(data.situation);
            $('textarea[name="cognition_dl"]').val(data.cognition);
            $('textarea[name="dispute_dl"]').val(data.dispute);
            $('.dl_butt').attr('data-id', data.id);
            ser_dl(data, id_rec);
        });


    });
}

function ser_dl(data, id){

    $('.dl_butt').click(function() {

        let mood = $('textarea[name="mood_dl"]').val();
        let situation = $('textarea[name="situation_dl"]').val();
        let cognition = $('textarea[name="cognition_dl"]').val();
        let dispute = $('textarea[name="dispute_dl"]').val();

        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'irs_dl' : id,
                'daterec' : data.daterec,
                'mood' : mood,
                'situation' : situation,
                'cognition' : cognition,
                'dispute' : dispute,
                'user_id' : data.user_id,
                'user_name' : data.user_name
            },
        }).done(function(){
            $('b[data-name="ds_dl'+ id +'"]').html(data.daterec + ' | ' + situation.slice(0, 50) + '...');
            $('p[data-name="mood_dl'+ id +'"]').html(mood);
            $('p[data-name="situation_dl'+ id +'"]').html(situation);
            $('p[data-name="cognition_dl'+ id +'"]').html(cognition);
            $('p[data-name="dispute_dl'+ id +'"]').html(dispute);
            $('.dl_ef').bPopup().close();
        });
    });
}

function edit_record_bl() {

    $('.er_bl').click(function() {
        $('.bl_ef').bPopup();
        let id_rec = this.getAttribute('data-record-id');
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"id_bl" : id_rec},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            $('textarea[name="mood_bl"]').val(data.mood);
            $('textarea[name="cognition_bl"]').val(data.cognition);
            $('textarea[name="dispute_bl"]').val(data.dispute);
            $('.bl_butt').attr('data-id', data.id);
            ser_bl(data, id_rec);
        });

//не работате редактивроние в архиве, поправь и обновление в мотивации в птср
    });
}

function ser_bl(data, id){

    $('.bl_butt').click(function() {

        let mood = $('textarea[name="mood_bl"]').val();
        let cognition = $('textarea[name="cognition_bl"]').val();
        let dispute = $('textarea[name="dispute_bl"]').val();

        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'irs_bl' : id,
                'daterec' : data.daterec,
                'mood' : mood,
                'cognition' : cognition,
                'dispute' : dispute,
                'user_id' : data.user_id,
                'user_name' : data.user_name
            },

        }).done(function(){
            $('b[data-name="ds_bl'+ id +'"]').html(data.daterec + ' | ' + cognition.slice(0, 50) + '...');
            $('p[data-name="mood_bl'+ id +'"]').html(mood);
            $('p[data-name="cognition_bl'+ id +'"]').html(cognition);
            $('p[data-name="dispute_bl'+ id +'"]').html(dispute);
            $('.bl_ef').bPopup().close();
        });
    });
}

function edit_record_rgu() {
    $('.er_rgu').click(function() {
        $('.rgu_ef').bPopup();
        let id_rec = this.getAttribute('data-record-id');
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {"id_rgu" : id_rec},
        }).done(function(data){
            data = jQuery.parseJSON(data);
            $('textarea[name="cognition_rgu"]').val(data.cognition);
            $('textarea[name="dispute_rgu"]').val(data.dispute);
            $('.rgu_butt').attr('data-id', data.id);
            ser_rgu(data, id_rec);
        });


    });
}

function ser_rgu(data, id){

    $('.rgu_butt').click(function() {

        let cognition = $('textarea[name="cognition_rgu"]').val();
        let dispute = $('textarea[name="dispute_rgu"]').val();

        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'irs_rgu' : id,
                'daterec' : data.daterec,
                'cognition' : cognition,
                'dispute' : dispute,
                'user_id' : data.user_id,
                'user_name' : data.user_name
            },
        }).done(function(){
            $('b[data-name="ds_rgu'+ id +'"]').html(data.daterec + ' | ' + cognition.slice(0, 50) + '...');
            $('p[data-name="cognition_rgu'+ id +'"]').html(cognition);
            $('p[data-name="dispute_rgu'+ id +'"]').html(dispute);
            $('.rgu_ef').bPopup().close();
        });
    });

}

function del_rec() {
    let id_rec;
    $('.del_record').click(function() {
        id_rec = this.getAttribute('data-record-id');
        $('.are_you_want_to_del').bPopup();
    });
    $('.del_yes').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'del_rec' : id_rec},
        }).done(function(data){
            $('.id'+ id_rec).remove();
            $('.are_you_want_to_del').bPopup().close();
        });
    });

    $('.del_no').click(function () {
        $('.are_you_want_to_del').bPopup().close();
    })
}

function del_rec_dl() {
    let id_rec;
    $('.del_record_dl').click(function() {
        id_rec = this.getAttribute('data-record-id');
        $('.are_you_want_to_del').bPopup();
    });
    $('.del_yes').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'del_rec_dl' : id_rec},
        }).done(function(data){
            $('.id_dl'+ id_rec).remove();
            $('.are_you_want_to_del').bPopup().close();
        });
    });

    $('.del_no').click(function () {
        $('.are_you_want_to_del').bPopup().close();
    })
}

function del_rec_bl() {
    let id_rec;
    $('.del_record_bl').click(function() {
        id_rec = this.getAttribute('data-record-id');
        $('.are_you_want_to_del').bPopup();
    });
    $('.del_yes').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'del_rec_bl' : id_rec},
        }).done(function(data){
            $('.id_bl'+ id_rec).remove();
            $('.are_you_want_to_del').bPopup().close();
        });
    });

    $('.del_no').click(function () {
        $('.are_you_want_to_del').bPopup().close();
    })
}

function del_rec_rgu() {
    let id_rec;
    $('.del_record_rgu').click(function() {
        id_rec = this.getAttribute('data-record-id');
        $('.are_you_want_to_del').bPopup();
    });
    $('.del_yes').click(function() {
        $.ajax({
            url: '/archive',
            method: 'POST',
            data: {'del_rec_rgu' : id_rec},
        }).done(function(data){
            $('.id_rgu'+ id_rec).remove();
            $('.are_you_want_to_del').bPopup().close();
        });
    });

    $('.del_no').click(function () {
        $('.are_you_want_to_del').bPopup().close();
    })
}

function mtp_arch() {
    $('.to_psycho').on('click',function() {
        let id = this.getAttribute('data-record-id');
        let mark = this.getAttribute('data-mark');
        check_emil('#mtp_input', '#mtp_submit');
        $('.mtp_arch').bPopup({
            position: ['auto', 100]
        });
        mail_psy_to_ajax2(id, mark);
    });
}

function mail_psy_to_ajax2(id, mark) {
    let mtp_sub = $('#mtp_submit');
    mtp_sub.off('click');
    mtp_sub.on('click', function () {
        ajax_request2(id, mark);
        $('.mtp_arch').bPopup().close();
    });
}

function ajax_request2(id, mark) {
        let daterec = '';
        let mood = '';
        let situation = '';
        let cognition = '';
        let reaction = '';
        let dispute = '';
        let result = '';

        if(mark === 'd'){
            daterec = $('p[data-name="daterec' + id + '"]').html();
            mood = $('p[data-name="mood' + id + '"]').html();
            situation = $('p[data-name="situation' + id + '"]').html();
            cognition = $('p[data-name="cognition' + id + '"]').html();
            reaction = $('p[data-name="reaction' + id + '"]').html();
            dispute = $('p[data-name="dispute' + id + '"]').html();
            result = $('p[data-name="result' + id + '"]').html();
        }else if(mark === 'dl'){
            daterec = $('p[data-name="daterec_dl' + id + '"]').html();
            mood = $('p[data-name="mood_dl' + id + '"]').html();
            situation = $('p[data-name="situation_dl' + id + '"]').html();
            cognition = $('p[data-name="cognition_dl' + id + '"]').html();
            reaction = 'Это поле не используется в упрощённом дневнике';
            dispute = $('p[data-name="dispute_dl' + id + '"]').html();
            result = 'Это поле не используется в упрощённом дневнике';
        }else if(mark === 'bl'){
            daterec = $('p[data-name="daterec_bl' + id + '"]').html();
            mood = $('p[data-name="mood_bl' + id + '"]').html();
            situation = 'Это поле не используется в блиц дневнике';
            cognition = $('p[data-name="cognition_bl' + id + '"]').html();
            reaction = 'Это поле не используется в блиц дневнике';
            dispute = $('p[data-name="dispute_bl' + id + '"]').html();
            result = 'Это поле не используется в блиц дневнике';
        }else if(mark === 'rgu'){
            daterec = $('p[data-name="daterec_rgu' + id + '"]').html();
            mood = 'Это поле не используется в ргу';
            situation = 'Это поле не используется в ргу';
            cognition = $('p[data-name="cognition_rgu' + id + '"]').html();
            reaction = 'Это поле не используется в ргу';
            dispute = $('p[data-name="dispute_rgu' + id + '"]').html();
            result = 'Это поле не используется в ргу';
        }

    let mail_to_psy = $('#mtp_input').val();

    $.ajax({
        type: 'POST',
        url: '/mail',
        data: {'daterec' : daterec,
            'mood' : mood,
            'situation' : situation,
            'cognition' : cognition,
            'reaction' : reaction,
            'dispute' : dispute,
            'result' : result,
            'psy_email' : mail_to_psy
        },
        success:function(data){
            $('.mess').html('<b>' + data.slice(0, -3) + '</b>');
            $('.success_mail').bPopup({
                autoClose: 3000
            });
        },
    });
}

//Script donate

function close_ad(){
    $('.close_ad').on('click', function (){
        $('.bubay').css('display','none');
    });
}

//Script donate end

//ptsr
function unnecessary_window_closers(class_cross, class_block, class_checkbox){
    $(class_cross).on('click', function (){
        if($(class_checkbox).is(':checked')) {
            if(class_block === '.current_motivation')
                Cookies.set(class_block.slice(1), 'close', { expires: 1 });
            else
                Cookies.set(class_block.slice(1), 'close', { expires: 30 });
            $(class_block).remove();
        } else {
            $(class_block).remove();
        }
    });
}

function open_close_text(svg, oc_div){
    $(svg).on('click', function (){
        if($(this).find('svg.fa-angles-down').length){
            $(oc_div).css({'height' : 'auto', '-webkit-mask-image': 'unset'});
            $(this).css({'top': -15});
            $(this).find('svg.fa-angles-down').removeClass('fa-angles-down').addClass('fa-angles-up');}
        else
        {
            $(oc_div).css({'height' : '150px', '-webkit-mask-image': '-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))'});
            $(this).css({'top': -50});
            $(this).find('svg.fa-angles-up').removeClass('fa-angles-up').addClass('fa-angles-down');}

    });
}

function button_listener(button, block){
    $(button).on('click', function (){
        add_record(block);
    });
}
function add_record(block){
    let motivation = $(block+'>textarea').val();
    $.ajax({
        type: 'POST',
        url: '/ptsr/motivation',
        data: {'motivation' : motivation},
        success: function(){
            $('.p_current_motivation').text(motivation);
    }});
}

//ptsr end