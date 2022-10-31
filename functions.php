
function is_valid_email_domain($login, $email, $errors ){
 $valid_email_domains = array("fad.unam.mx");// whitelist email domain lists
 $valid = false;
 foreach( $valid_email_domains as $d ){
 $d_length = strlen( $d );
 $current_email_domain = strtolower( substr( $email, -($d_length), $d_length));
 if( $current_email_domain == strtolower($d) ){
 $valid = true;
 break;
 }
 }
 // if invalid, return error message
 if( $valid === false ){
 $errors->add('domain_whitelist_error',__( '<p style="color:white"> <strong>ERROR</strong>: Sólo puedes registrarte con un correo válido de la FAD</p>'));
 }
}
add_action('register_post', 'is_valid_email_domain',1,3 ); 
