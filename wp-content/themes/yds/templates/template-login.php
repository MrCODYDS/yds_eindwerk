<?php
/* Template Name: Template - Login */

$redirect_to = '';

$args = array(
    'redirect' => home_url(),
    'label_username' => __( 'Gebruikersnaam' ),
    'label_password' => __( 'Wachtwoord' ),
    'label_log_in'   => __( 'Log in' ),
    'id_username'    => 'user',
    'id_password'    => 'pass',
);

$errors = "";
$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;

if ( $login === "failed" ) {
    $errors .= '<p class="">Er is iets misgelopen bij het inloggen, probeer opnieuw.</p>';
}

?>

<section class="c-login py-4 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row c-login-content">
                    <div class="c-login-content--first col-lg-7">
                        <div class="c-login--login d-flex flex-column justify-content-around">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <div class="c-login__image mt-3 mt-lg-0"></div>
                                <h5 class="text-dark mt-2 d-block d-lg-none">Log in</h5>
                                <div class="c-login__errors w-100 mt-5 px-4 px-sm-6 px-md-8 px-lg-5 px-xl-7 px-xxl-8">
                                    <?php echo $errors ?>
                                </div>
                                <div class="w-100 px-3 px-sm-6 px-md-8 px-lg-5 px-xl-7 px-xxl-8">
                                    <?php wp_login_form( $args ); ?>
                                    <p class="text-center">
                                        <a href="<?php echo site_url('wp-login.php?action=lostpassword');?>" class="text-dark">Wachtwoord vergeten?</a>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="text-center pb-3">
                                <a href="/register" class="btn btn-link btn-link--dark">
                                    Maak nu een account
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="c-login-content--last col-lg-5 d-none d-lg-block">
                        <div class="c-login--info d-flex flex-column justify-content-center text-center">
                            <div class="px-5">
                                <h5 class="text-white mb-4">Welkom terug!</h5>
                                <div class="text-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>