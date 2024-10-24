$(document).ready(function() {
   ajax_db_handler('.change_pass_butt', '.change_pass_email', '/chp');
   check_input_one_field('.change_pass_email', pattern_mail, '.change_pass_butt')
});