<?php
function addTable() {
    global $wpdb;

    // Set table name
    $table = $wpdb->prefix . 'user_registrations';

    $charset_collate = $wpdb->get_charset_collate();

    // Write creating query
    $query =  "CREATE TABLE IF NOT EXISTS  ".$table." (
                id INT(11) AUTO_INCREMENT,
                user_id INT(11),
                reservation_choice VARCHAR(255),
                reservation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                reservation_time VARCHAR(255),
                reservation_people INT(11),
                PRIMARY KEY(id)
                )$charset_collate;";

    // Execute the query
    $wpdb->query( $query );
}

add_action( 'init', 'addTable');