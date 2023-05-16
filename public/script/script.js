$(document).ready(function() {
    script_to_nav_menu();

    leaf_diary_block();

    popup_windows( $('.we'),  $('.wheel_emotion'));
    popup_windows( $('.ci'), $('.mental_error'));

    view_exemple();
    accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');

    ajax_db_handler('.save_to_archive', '.textMode, .textMode1','&archive=ok');
    mail_to_psycho('&mail=ok');

    reset_to_new_rec();
});
