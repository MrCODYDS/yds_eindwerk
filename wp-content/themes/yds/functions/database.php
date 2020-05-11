<?php
   

function my_plugin_create_db() {
    $wpdb->insert($wpdb->user_reservation, array("user_id" => 1, "meta_key" => "awesome_factor", "meta_value" => 10), array("%d", "%s", "%d"));  
    
}

register_activation_hook( __FILE__, 'my_plugin_create_db' );
