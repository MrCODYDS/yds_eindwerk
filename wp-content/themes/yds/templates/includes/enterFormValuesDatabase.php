<?php

    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

    global $current_user;
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
                $timeslot = $_POST['final-time'];
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

        header('Location: /reservatie');
?>