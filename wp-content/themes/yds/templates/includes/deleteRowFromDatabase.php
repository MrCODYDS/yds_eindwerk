<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

global $current_user;
get_currentuserinfo();
global $wpdb;

if ($_POST['profile-action'] && $_POST['profile-id']) {
    if ($_POST['profile-action'] == 'Annuleren') {
        $success=$wpdb->delete( "wp_user_reservations", array('id' => $_POST['profile-id']));
        echo "<script>window.location = '/profiel'</script>";
    }
}

$to = $current_user->user_email;
$subject = "Sporezo - Je registratie is geannuleerd!";
$message = '
    <html>
        <head>
            <title>Jouw reservatie</title>
            </head>
        <body>
            <p>Je reservatie is succesvol geannuleerd.</p>
        </body>
    </html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Sporezo <info.sporezo@gmail.com
>' . "\r\n";

// send email
wp_mail($to, $subject, $message, $headers);

?>