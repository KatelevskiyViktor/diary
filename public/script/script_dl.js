$(document).ready(function() {
    script_to_nav_menu();

    leaf_diary_block();

    view_exemple();
    accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');

    ajax_db_handler('.save_to_archive', '.textMode, .textMode1','&archive=dl');
    mail_to_psycho('&mail=dl');
    
    reset_to_new_rec();


});