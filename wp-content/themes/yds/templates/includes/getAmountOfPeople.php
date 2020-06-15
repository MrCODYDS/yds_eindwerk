<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

global $wpdb;
$choiceValue = $_GET['choice'];

switch ($choiceValue) {
    case "Individuele spelers":
    case "Privé training":
        for ($i = 1; $i <= 4; $i++) {
            echo '<div class="col-auto mb-3">';
            echo '<input type="radio" id="radioPeople' . $i . '" name="radioPeople" value="' . $i . '">';
            echo '<label for="radioPeople' . $i . '">' .$i .'</label>';
            echo '</div>';
        }
        break;
    case "Clubs":
        case "Bedrijven":
        echo '<select id="amountPeopleSelect" name="amountPeopleSelect">';
        echo '<option value="" selected="selected" disabled hidden>Geen aantal geselecteerd</option>';
        for ($i = 1; $i <= 50; $i++) {
            echo '<option value="' . $i .'">' .$i . '</option>';
        }
        echo '</select>';
        break;
}
?>