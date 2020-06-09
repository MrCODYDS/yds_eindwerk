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
    $message = '
        <html>
            <head>
                <title style="background-color:#2660c3">Jouw reservatie</title>
                </head>
            <body>
                <p>Je reservatie is voltooid. Jouw reservatiegegevens:</p>
                <table>
                    <tr>
                        <th>Keuze</th>
                        <th>Datum</th>
                        <th>Speelveld</th>
                        <th>Tijd</th>
                        <th>Aantal personen</th>
                    </tr>
                    <tr>
                        <td>' . $choice . '</td>
                        <td>' . $date . '</td>
                        <td>' . $ground . '</td>
                        <td>' . $timeslot . '</td>
                        <td>' . $people . '</td>
                    </tr>
                </table>
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

    header('Location: /reserveren');
?>