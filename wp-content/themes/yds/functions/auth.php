<?php

// Redirect users/admins to homepage after login
add_filter( 'login_redirect', 'redirect_users', 10, 3 );
function redirect_users( $redirect_to, $request, $user ){
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) || in_array( 'subscriber', $user->roles ) ) {
            $redirect_to = '/'; // Your redirect URL
        }
    }
    return $redirect_to;
}

// Block non-administrators from accessing the WordPress back-end
add_action( 'init', 'wpabsolute_block_users_backend' );
function wpabsolute_block_users_backend() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! wp_doing_ajax() ) {
		wp_redirect( home_url() );
		exit;
	}
}

// Hide admin bar for users
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

// Redirect users to homepage after logout
add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
  wp_redirect( home_url() );
  exit();
}




///////////////////////////////
// Forgot password functions //
///////////////////////////////

add_action( 'login_form_lostpassword', 'redirect_to_custom_lostpassword' );
/**
 * Redirects the user to the custom "Forgot your password?" page instead of
 * wp-login.php?action=lostpassword.
 */
function redirect_to_custom_lostpassword() {
    if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
        if ( is_user_logged_in() ) {
            $this->redirect_logged_in_user();
            exit;
        }
 
        wp_redirect( home_url( 'forgot-password' ) );
        exit;
    }
}

add_action( 'login_form_lostpassword', 'do_password_lost' );
/**
 * Initiates password reset.
 */
function do_password_lost() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
        $errors = retrieve_password();
        if ( is_wp_error( $errors ) ) {
            // Errors found
            $redirect_url = home_url( 'forgot-password' );
            $redirect_url = add_query_arg( 'errors', join( ',', $errors->get_error_codes() ), $redirect_url );
        } else {
            // Email sent
            $redirect_url = home_url( 'login' );
            $redirect_url = add_query_arg( 'checkemail', 'confirm', $redirect_url );
        }
        wp_redirect( $redirect_url );
        
        exit;
    }
}

add_filter( 'retrieve_password_message', 'replace_retrieve_password_message', 10, 4 );

/**
 * Returns the message body for the password reset mail.
 * Called through the retrieve_password_message filter.
 *
 * @param string  $message    Default mail message.
 * @param string  $key        The activation key.
 * @param string  $user_login The username for the user.
 * @param WP_User $user_data  WP_User object.
 *
 * @return string   The mail message to send.
 */
function replace_retrieve_password_message( $message, $key, $user_login, $user_data ) {
    // Create new message
    $msg  = __( 'Hello!') . "\r\n\r\n";
    $msg .= sprintf( __( 'You asked us to reset your password for your account with username "%s."'), $user_login ) . "\r\n\r\n";
    $msg .= __( "If this was a mistake, or you did't ask for a password reset, just ignore this email and nothing will happen.") . "\r\n\r\n";
    $msg .= __( 'To reset your password, visit the following address:') . "\r\n\r\n";
    $msg .= site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . "\r\n\r\n";
    $msg .= __( 'Thanks!') . "\r\n";
 
    return $msg;
}


//////////////////////////////
// Reset password functions //
//////////////////////////////

add_action( 'login_form_rp', 'redirect_to_custom_password_reset');
add_action( 'login_form_resetpass', 'redirect_to_custom_password_reset');

/**
 * Redirects to the custom password reset page, or the login page
 * if there are errors.
 */
function redirect_to_custom_password_reset() {
    if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
        // Verify key / login combo
        $user = check_password_reset_key( $_REQUEST['key'], $_REQUEST['login'] );
        if ( ! $user || is_wp_error( $user ) ) {
            if ( $user && $user->get_error_code() === 'expired_key' ) {
                wp_redirect( home_url( 'login?login=expiredkey' ) );
            } else {
                wp_redirect( home_url( 'login?login=invalidkey' ) );
            }
            exit;
        }
 
        $redirect_url = home_url( 'reset-password' );
        $redirect_url = add_query_arg( 'login', esc_attr( $_REQUEST['login'] ), $redirect_url );
        $redirect_url = add_query_arg( 'key', esc_attr( $_REQUEST['key'] ), $redirect_url );
 
        wp_redirect( $redirect_url );
        exit;
    }
}

add_action( 'login_form_rp', 'do_password_reset');
add_action( 'login_form_resetpass', 'do_password_reset');
/**
 * Resets the user's password if the password reset form was submitted.
 */
function do_password_reset() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
        $rp_key = $_REQUEST['rp_key'];
        $rp_login = $_REQUEST['rp_login'];
 
        $user = check_password_reset_key( $rp_key, $rp_login );
 
        if ( ! $user || is_wp_error( $user ) ) {
            if ( $user && $user->get_error_code() === 'expired_key' ) {
                wp_redirect( home_url( 'login?login=expiredkey' ) );
            } else {
                wp_redirect( home_url( 'login?login=invalidkey' ) );
            }
            exit;
        }
 
        if ( isset( $_POST['pass1'] ) ) {
            if ( $_POST['pass1'] != $_POST['pass2'] ) {
                // Passwords don't match
                $redirect_url = home_url( 'reset-password' );
 
                $redirect_url = add_query_arg( 'key', $rp_key, $redirect_url );
                $redirect_url = add_query_arg( 'login', $rp_login, $redirect_url);
                $redirect_url = add_query_arg( 'error', 'password_reset_mismatch', $redirect_url );
 
                wp_redirect( $redirect_url );
                exit;
            }
 
            if ( empty( $_POST['pass1'] ) ) {
                // Password is empty
                $redirect_url = home_url( 'reset-password' );
 
                $redirect_url = add_query_arg( 'key', $rp_key, $redirect_url );
                $redirect_url = add_query_arg( 'login', $rp_login, $redirect_url );
                $redirect_url = add_query_arg( 'error', 'password_reset_empty', $redirect_url );
 
                wp_redirect( $redirect_url );
                exit;
            }
 
            // Parameter checks OK, reset password
            reset_password( $user, $_POST['pass1'] );
            wp_redirect( home_url( 'login?password=changed' ) );
        } else {
            echo "Invalid request.";
        }
 
        exit;
    }
}