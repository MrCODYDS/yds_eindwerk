<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','yds_eindwerk');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"yds_eindwerk");
$sql = "SELECT * FROM wp_user_reservations";
$result = mysqli_query($con,$sql);


$numbers = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);

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


echo "<table><tr><th>Free hour</th></tr>";

foreach ($numbers as $number) {
    echo "<tr>";
    echo "<td>" . $number . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
</body>
</html>