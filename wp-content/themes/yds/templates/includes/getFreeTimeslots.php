<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

global $wpdb;


$sql = "SELECT * FROM wp_user_reservations";
$result = $wpdb->get_results($sql);




// Fill  hours
$hours = array();
for ($i = 0; $i < 24; $i++) {
    $hours[] = $i;
}

// Get all rows and combine them with a "," between
$combined = "";
foreach ($result as $row) {
    $combined = $combined . "," . $row->reservation_time;    
}

// Explode string at every ","
$exploded = explode(",",$combined);

// Check which hours are already taken and delete them out of $hours array
foreach ($exploded as $single) {
    if (in_array($single, $hours)) {
        unset($hours[$single]);
    }
}

foreach ($hours as $hour) {
    echo '<div class="col-auto mb-3">';
    echo '<input type="radio" id="radiotimeslot' . $hour . '" name="radioTimeslots" value="' . $hour .'">';
    echo '<label for="radiotimeslot' . $hour . '">'. $hour . '</label>';
    echo '</div>';
}

?>
</body>
</html>