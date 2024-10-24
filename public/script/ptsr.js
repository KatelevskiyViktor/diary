$(document).ready(function() {
    unnecessary_window_closers('.info>.svg', '.info', '#no_info_block');
    unnecessary_window_closers('.motivation>.svg', '.motivation', '#no_mot_block');
    unnecessary_window_closers('.current_motivation>.svg', '.current_motivation', '#no_current_motivation_block');
    accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');
    accordion_animation('.accordeon2 .acc-head2', '.accordeon2 .acc-body2');
    open_close_text('.motivation>.arrow_button', '.motivation>.text')
    open_close_text('.watch_thought>.arrow_button', '.watch_thought>.text')
    open_close_text('.evaluate_the_thought>.arrow_button', '.evaluate_the_thought>.text')
    button_listener('.button_motivation', '.motivation');
    ajax_db_handler('.save_to_mfai', '.textMode, .textMode1','/ptsr');
    


    // script_to_nav_menu();
    //
    // leaf_diary_block();
    //
    // popup_windows( $('.we'),  $('.wheel_emotion'));
    // popup_windows( $('.ci'), $('.mental_error'));
    //
    // view_exemple();
    // accordion_animation('.accordeon .acc-head', '.accordeon .acc-body');
    //
    // ajax_db_handler('.save_to_archive', '.textMode, .textMode1','/record');
    // mail_to_psycho('/mail');
    //
    // reset_to_new_rec();
});