<?php
/* Template Name: Template - Register */

$redirect_to = '';
$errors = "";

if ( isset($_GET['username_exists']) ==  true) {
    $errors .= '<p class="error-fail">De ingevoerde gebruikersnaam bestaat al.</p>';
}
if ( isset($_GET['empty_username']) ==  true) {
    $errors .= '<p class="error-fail">Er is geen gebruikersnaam ingevuld.</p>';
}
if ( isset($_GET['empty_email']) ==  true ) {
    $errors .= '<p class="error-fail">Er is geen email ingevuld.</p>';
}
if ( isset($_GET['invalid_email']) ==  true ) {
    $errors .= '<p class="error-fail">Er is geen geldig emailadres ingevuld.</p>';
}

?>

<section class="c-login py-4 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row c-login-content">
                    <div class="c-login-content--first col-lg-5 d-none d-lg-block">
                        <div class="c-register--info d-flex flex-column justify-content-center text-center">
                            <div class="px-5">
                                <h5 class="text-white mb-4">Welkom!</h5>
                                <div class="text-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-login-content--last col-lg-7 ">
                        <div class="c-login--register d-flex flex-column justify-content-around">
                            <div class=" d-flex flex-column justify-content-center align-items-center h-100">
                                <div class="c-login__image"></div>
                                <h5 class="text-dark mt-2 d-block d-lg-none">Registreer</h5>
                                <div class="c-login__errors w-100 mt-5 px-4 px-sm-6 px-md-8 px-lg-5 px-xl-7 px-xxl-8">
                                    <?php echo $errors ?>
                                </div>
                                <form name="loginform" id="loginform" class="text-center px-4 px-sm-6 px-md-8 px-lg-5 px-xl-7 px-xxl-8" action="<?php echo wp_registration_url(); ?>" method="post">
                                    <p>
                                        <label for="user_login" class="label-hide"></label>
                                        <input id="user_login" type="text" value="" name="user_login" placeholder="Gebruikersnaam">
                                    </p>
                                    <p>
                                        <label for="user_email" class="label-hide"></label>
                                        <input id="user_email" type="email" value="" name="user_email" placeholder="Email">
                                    </p>
                                    <p class="mt-6 mb-0">
                                        <input id="wp-submit" class="btn btn-secondary btn-stretched" type="submit" value="Registreer" name="wp-submit">
                                        <input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
                                        <input type="hidden" value="1" name="testcookie">
                                    </p>
                                </form>
                            </div>
                            <div class="text-center pb-3">
                                <a href="/login" class="btn btn-link btn-link--dark">
                                    Ik heb al een account
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>