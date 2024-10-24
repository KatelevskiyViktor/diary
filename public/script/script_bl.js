$(document).ready(function() {
    script_to_nav_menu();

    leaf_diary_block();
    popup_windows( $('.ci'), $('.mental_error'));

    accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');
    view_exemple();

    ajax_db_handler('.save_to_archive', '.textMode, .textMode1','/blrecord');
    mail_to_psycho('/blmail');

    reset_to_new_rec();
});
