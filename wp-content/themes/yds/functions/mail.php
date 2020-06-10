<?php

// Add text/html to mail
add_filter('wp_mail_content_type', function( $content_type ) {
    return 'text/html';
});