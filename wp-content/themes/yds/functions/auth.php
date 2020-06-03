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


/////////////////////
// Login functions //
/////////////////////

add_action( 'login_form_login', 'redirect_to_custom_login');

/**
 * Redirect the user to the custom login page instead of wp-login.php.
 */
function redirect_to_custom_login() {
    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
        $redirect_to = isset( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : null;
     
        if ( is_user_logged_in() ) {
            $this->redirect_logged_in_user( $redirect_to );
            exit;
        }
 
        // The rest are redirected to the login page
        $login_url = home_url( 'login' );
        if ( ! empty( $redirect_to ) ) {
            $login_url = add_query_arg( 'redirect_to', $redirect_to, $login_url );
        }
 
        wp_redirect( home_url( ('login')));
        exit;
    }
}

////////////////////////
// Register functions //
////////////////////////
add_action( 'login_form_register','redirect_to_custom_register' );

/**
 * Redirects the user to the custom registration page instead
 * of wp-login.php?action=register.
 */
function redirect_to_custom_register() {
    if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
        if ( is_user_logged_in() ) {
            $this->redirect_logged_in_user();
        } else {
            wp_redirect( home_url( 'register' ) );
        }
        exit;
    }
}