<?php
/* Template Name: Template - Lost Password */

$redirect_to = '';
$errors = "";

if ( isset($_GET['errors'])) {
    $errors .= '<p class="error-fail">Er is iets misgelopen, probeer opnieuw.</p>';
}
?>


<section class="c-forgotpassword py-4 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <div class="block-background py-4 py-md-5 px-3 px-md-4">
                            <h3><?php _e( 'Wachtwoord vergeten??'); ?></h3>
                            <p>
                                <?php
                                    _e(
                                        "Vul je emailadres in en we zullen jou een link sturen waarmee je je wachtwoord opnieuw kan instellen."
                                    );
                                ?>
                            </p>
                            <?php echo $errors ?>
                            <form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
                                <p class="">
                                    <label for="user_login"><?php _e( 'Email' ); ?>
                                    <input type="text" name="user_login" id="user_login">
                                </p>

                                <p class="m-0">
                                    <input type="submit" name="submit" class="btn btn-secondary"
                                        value="<?php _e( 'Stel wachtwoord opnieuw in' ); ?>"/>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>