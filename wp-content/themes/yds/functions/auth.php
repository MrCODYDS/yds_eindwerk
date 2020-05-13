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