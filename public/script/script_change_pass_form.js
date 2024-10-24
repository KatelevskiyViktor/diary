$(document).ready(function() {
    for_cpass_univ.first_sel = '.new_pass';
    for_cpass_univ.second_sel = '.new_pass_sec';
    for_cpass_univ.mark = 'new_sec';
    for_cpass_univ.but = '.change_pass_butt';
    ajax_db_handler('.change_pass_butt', '.new_pass', '/recnp');
    check_input_universal('.new_pass', pattern_pass, 'new', '.new_pass', '.change_pass_butt');
    check_input_cpass_univ('.new_pass_sec');
    view_pass('.password-control', '.password');

});