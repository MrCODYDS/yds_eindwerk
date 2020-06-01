<?php
/* Template Name: Template - Register */

$redirect_to = '';
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
                                <form name="loginform" id="loginform" class="text-center mt-5" action="<?php echo site_url( '/wp-login.php?action=register' ); ?>" method="post">
                                    <p>
                                        <label for="user_login"></label>
                                        <input id="user_login" type="text" value="" name="log" placeholder="Gebruikersnaam">
                                    </p>
                                    <p>
                                        <label for="user_email"></label>
                                        <input id="user_email" type="email" value="" name="email" placeholder="Email">
                                    </p>
                                    <p class="mt-6 mb-0">
                                        <input id="wp-submit" class="btn btn-secondary" type="submit" value="Registreer" name="wp-submit">
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