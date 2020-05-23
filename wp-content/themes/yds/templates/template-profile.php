<?php
/* Template Name: Template - Profile */

$user_id = get_current_user_id();
global $wpdb;

$sql = "SELECT * FROM wp_user_reservations WHERE user_id = '" . $user_id . "'";

$result = $wpdb->get_results($sql);

if ($_POST['action'] && $_POST['id']) {
    if ($_POST['action'] == 'Delete') {
        $wpdb->delete( "wp_user_reservations", array('id' => $_POST['id']));
        echo "<script>window.location = '/user-profile'</script>";
    }
}

?>

<section class="c-profile pt-2 pt-md-4 pb-4 pb-md-6">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="c-profile-table">
                    <thead>
                        <tr>
                            <th class="column1">Uw keuze</th>
                            <th class="column2">Datum</th>
                            <th class="column3">Speelveld</th>
                            <th class="column4">Sessie</th>
                            <th class="column5">Aantal personen</th>
                            <th class="column6"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                                <td class="column1"><?php echo $row->reservation_choice ?></td>
                                <td class="column2"><?php echo $row->reservation_date ?></td>
                                <td class="column3"><?php echo $row->reservation_ground ?></td>
                                <?php
                                    
                                    $exploded = explode(",",$row->reservation_time);
                                    $session_length = count($exploded);
                                    $sum = $exploded[0] + $session_length;
                                    $reservation_time = $exploded[0] . ":00-" . $sum . ":00";
                                ?>
                                <td class="column4"><?php echo $reservation_time?></td>
                                <td class="column5"><?php echo $row->reservation_people ?></td>
                                <form action="" method="post">
                                    <td class="column6">
                                        <input type="submit" name="action" value="Delete" class="btn btn-dark">
                                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                    </td>
                                </form>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>