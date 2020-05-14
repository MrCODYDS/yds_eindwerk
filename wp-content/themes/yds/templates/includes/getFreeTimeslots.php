<?php

// Get connection with database & select all records in wp_user_reservations
$con = mysqli_connect('localhost','root','','yds_eindwerk');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"yds_eindwerk");
$sql = "SELECT * FROM wp_user_reservations";
$result = mysqli_query($con,$sql);

// Fill numbers with hours
$numbers = array();
for ($i = 0; $i < 24; $i++) {
    $numbers[] = $i;
}

// Get all rows and combine them with a "," between
$combined = "";
while($row = mysqli_fetch_array($result)) {
    $combined = $combined . "," . $row['reservation_time'];    
}

// Explode string at every ","
$exploded = explode(",",$combined);

// Check which hours are already taken and delete them out of $numbers array
foreach ($exploded as $single) {
    if (in_array($single, $numbers)) {
        unset($numbers[$single]);
    }
}

foreach ($numbers as $number) {
    echo '<div class="col-auto mb-3">';
    echo '<input type="radio" id="radiotimeslot' . $number . '" name="radioTimeslots" value="' . $number .'">';
    echo '<label for="radiotimeslot' . $number . '">'. $number . '</label>';
    echo '</div>';
}

mysqli_close($con);
?>
</body>
</html>