<?php
/* Template Name: Template - Profile */

$user_id = get_current_user_id();
global $wpdb;

$sql = "SELECT * FROM wp_user_reservations WHERE user_id = '" . $user_id . "'";

$result = $wpdb->get_results($sql);

?>
<?php if(is_user_logged_in()): ?>
    <?php the_content(); ?>
    <section class="c-profile pt-2 pt-md-4 pb-4 pb-md-6">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if (empty($result)): ?>
                        <div class="c-profile-warning d-flex justify-content-center align-items-center py-3 px-6">
                            <svg class="icon"><use xlink:href="#warning" /></svg>
                            <div class="ml-4">
                                <h3 class="text-white">Opgelet!</h3>
                                <p class="text-white m-0">U heeft nog geen reservaties.</p>
                            </div>
                        </div>
                    <?php else: ?>
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
                                        <td class="column1" data-content="Uw keuze"><?php echo $row->reservation_choice ?></td>
                                        <td class="column2" data-content="Datum"><?php echo $row->reservation_date ?></td>
                                        <td class="column3" data-content="Speelveld"><?php echo $row->reservation_ground ?></td>
                                        <?php
                                            
                                            $exploded = explode(",",$row->reservation_time);
                                            $session_length = count($exploded);
                                            $sum = $exploded[0] + $session_length;
                                            $reservation_time = $exploded[0] . ":00-" . $sum . ":00";
                                        ?>
                                        <td class="column4" data-content="Sessie"><?php echo $reservation_time?></td>
                                        <td class="column5" data-content="Aantal personen"><?php echo $row->reservation_people ?></td>
                                        <form action="/wp-content/themes/yds/templates/includes/deleteRowFromDatabase.php" method="POST" id="profile-cancel">
                                            <td class="column6" data-content="">
                                                <input type="submit" name="profile-action" value="Annuleren" class="btn btn-primary" id="profile-action" onclick="return confirm('Bent u zeker dat u uw reservatie wilt annuleren?')">
                                                <input type="hidden" name="profile-id" value="<?php echo $row->id; ?>" id="profile-id">
                                            </td>
                                        </form>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <?php echo "<script>window.location = '/login'</script>"; ?>
<?php endif; ?>