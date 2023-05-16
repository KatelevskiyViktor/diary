$(document).ready(function() {
    script_to_nav_menu();

    accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');
    accordion_animation('.accordeon2 .acc-head2', '.accordeon2 .acc-body2');
    accordion_animation('.accordeon3 .acc-head3', '.accordeon3 .acc-body3');
    accordion_animation('.accordeon4 .acc-head4', '.accordeon4 .acc-body4');

    add_by_scroll_diary('.accordeon .acc-head', '.accordeon .acc-body');
    add_by_scroll_diary_dl('.accordeon2 .acc-head2', '.accordeon2 .acc-body2');
    add_by_scroll_diary_bl('.accordeon3 .acc-head3', '.accordeon3 .acc-body3');
    add_by_scroll_diary_rgu('.accordeon4 .acc-head4', '.accordeon4 .acc-body4');

    edit_record();
    edit_record_dl();
    edit_record_bl();
    edit_record_rgu();
    del_rec();
    del_rec_dl();
    del_rec_bl();
    del_rec_rgu()
    mtp_arch();

  /*  ajax_db_handler('.edit_sub', ' .textMode1','&archive=ed');



    mail_to_psycho('&mail=ok');*/
});