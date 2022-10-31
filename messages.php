if (!empty($chk_user_email->common_message['arm_invalid_domain'])) ? $chk_user_email -> common_message['arm_invalid_domain'] : __('Solo se puede ingresar con una cuenta de la FAD', 'ARMember') {
                $arm_message = array('status' => 'error', 'message' => $err_msg);
                $user_email = '';
} 
