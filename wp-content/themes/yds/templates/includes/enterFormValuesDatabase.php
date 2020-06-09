<?php

    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

    global $current_user;
    get_currentuserinfo();
    global $wpdb;

    $choice = $_POST['final-choice'];
    $people = $_POST['final-people'];
    $ground = $_POST['final-ground'];
    $date = $_POST['final-date'];
    $session = $_POST['sessions'];
    $userId = $current_user->ID;

    // Check which session is chosen and add length to database
    switch($session) {
        case 1:
            $timeslot = $_POST['radioTimeslots'];
        break;
        case 2:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . "," . ($value+1);
        break;
        case 3:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . "," . ($value+1) . "," . ($value+2);
        break;
        case 4:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . "," . ($value+1) . "," . ($value+2) . "," . ($value+3);
        break;
    }

    $table = $wpdb->prefix . "user_reservations";
    
    $success=$wpdb->insert($table, array(
        "user_id" => $userId,
        "reservation_choice" => $choice,
        "reservation_date" => $date,
        "reservation_ground" => $ground,
        "reservation_time" => $timeslot,
        "reservation_people" => $people
    ));
    

    $to = $current_user->user_email;
    $subject = "Sporezo - Je registratie is voltooid!";
   

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Keuze</strong> </td><td>" . $choice . "</td></tr>";
    $message .= "<tr><td><strong>Datum</strong> </td><td>" . $date . "</td></tr>";
    $message .= "<tr><td><strong>Speelveld</strong> </td><td>" . $ground . "</td></tr>";
    $message .= "<tr><td><strong>Tijd</strong> </td><td>" . $timeslot . "</td></tr>";
    $message .= "<tr><td><strong>Aantal personen</strong> </td><td>" . $people . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: Sporezo <info.sporezo@gmail.com
    >' . "\r\n";

    // send email
    wp_mail($to, $subject, $message, $headers);

    header('Location: /reserveren');
?>