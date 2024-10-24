$(document).ready(function() {
    script_to_nav_menu();

    accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');
    view_exemple();

    ajax_db_handler('.save_to_archive', '.textMode, .textMode1','/rgurecord');
    mail_to_psycho('/rgumail');

    reset_to_new_rec();
});
