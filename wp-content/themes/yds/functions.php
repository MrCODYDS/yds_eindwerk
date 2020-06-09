<?php

include_once 'functions/setup.php';
include_once 'functions/setup-blocks.php';
include_once 'functions/assets.php';
include_once 'functions/gutenberg.php';
include_once 'functions/images.php';
include_once 'functions/database.php';
include_once 'functions/auth.php';
include_once 'functions/walker.php';


add_filter('wp_mail_content_type', function( $content_type ) {
    return 'text/html';
});