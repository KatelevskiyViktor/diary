$(document).ready(function() {
  anim_to_auth();
  check_form();
  check_input_universal('.ent_uname', pattern_name, 'uname', '', '.ent_butt');
  check_input_universal('.ent_pass', pattern_pass, 'pass', '', '.ent_butt');
  view_pass('.password-control1', '.password1');
  view_pass('.password-control', '.password');
  ajax_db_handler('#submit_reg','.reg_user, .reg_pass, .reg_email', '/reg');
  ajax_db_handler('.ent_butt','.ent_uname, .ent_pass', '/ent');
  remember_me();
  reg_link();
  close_ad();

});