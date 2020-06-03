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
            set_query_var( 'test', true );
        }
 
        wp_redirect( $redirect_url );
        exit;
    }
}