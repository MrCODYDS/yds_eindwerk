<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );
date_default_timezone_set("Europe/Brussels");

global $wpdb;
$dateValue = $_GET['date'];
$groundValue = $_GET['ground'];
$sessionValue = $_GET['session'];

// Get all rows from wp_users_reservations where reservation_date is equal to selected date
$sql = "SELECT * FROM wp_user_reservations WHERE reservation_date = '" . $dateValue . "' AND reservation_ground = '" . $groundValue . "'";
$result = $wpdb->get_results($sql);

// Fill  hours
$hours = array();
$amountOfHours = 24;
for ($i = 0; $i < $amountOfHours; $i++) {
    $hours[] = $i;
}

// Get all rows and combine them with a "," between
$combined = "";
$dates_in_use = array();

foreach ($result as $row) {
    $combined = $combined . "," . $row->reservation_time;    
}


// Explode string at every ","
$exploded = explode(",",$combined);

// Check which hours are already taken and delete them out of $hours array
foreach ($exploded as $single) {
    switch($sessionValue) {
        case 1:
            if (in_array($single, $hours)) {
                unset($hours[$single]);
            }
        break;
        case 2:
            if (in_array($single, $hours)) {
                unset($hours[$single]);
                unset($hours[(int)$single-1]);
                unset($hours[$amountOfHours-1]);
            }
        break;
        case 3:
            if (in_array($single, $hours)) {
                unset($hours[$single]);
                unset($hours[(int)$single-1]);
                unset($hours[(int)$single-2]);
                unset($hours[$amountOfHours-1]);
                unset($hours[$amountOfHours-2]);
            }
        break;
        case 4:
            if (in_array($single, $hours)) {
                unset($hours[$single]);
                unset($hours[(int)$single-1]);
                unset($hours[(int)$single-2]);
                unset($hours[(int)$single-3]);
                unset($hours[$amountOfHours-1]);
                unset($hours[$amountOfHours-2]);
                unset($hours[$amountOfHours-3]);
            }
        break;
    }
}

// Hide hours that are in the past
$nowHour = date('H');
for ($i = 0; $i <= $nowHour; $i++) {
    unset($hours[$i]);
}


// Show all timeslots in modal
if (!empty($hours)) {
    foreach ($hours as $hour) {
        $hourlength = strlen((string)$hour);
        
        echo '<div class="col-4 col-sm-3 mb-3 text-center">';
        echo '<input type="radio" id="radiotimeslot' . $hour . '" name="radioTimeslots" value="' . $hour .'">';
        if ($hourlength == 1) {
            echo '<label for="radiotimeslot' . $hour . '" class="w-100">0'. $hour . ':00</label>';
        } else {
            echo '<label for="radiotimeslot' . $hour . '" class="w-100">'. $hour . ':00</label>';
        }
        echo '</div>';
    }
} else {
    echo '<div class="col">Momenteel zijn er op de gekozen datum, speelveld en sessielengte geen plaatsen meer vrij. Gelieve een andere dag, terrein of sessielengte te kiezen.</div>';
}



?>