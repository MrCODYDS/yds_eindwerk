<?php
/* Template Name: Template - Login */

$redirect_to = '';
?>

<section class="c-login py-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="">
                    <div class="row c-login-content">
                        <div class="c-login--login col-7 d-flex flex-column justify-content-around">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <div class="c-login__image mb-5"></div>
                                <form name="loginform" id="loginform" class="text-center" action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
                                    <p>
                                        <label for="user_login"></label>
                                        <input id="user_login" type="text" value="" name="log" placeholder="Gebruikersnaam">
                                    </p>
                                    <p>
                                        <label for="user_pass"></label>
                                        <input id="user_pass" type="password" value="" name="pwd" placeholder="Wachtwoord">
                                    </p>
                                    <p>
                                        <input id="rememberme" type="checkbox" value="forever" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </p>
                                    <p class="mt-3 mb-0">
                                        <input id="wp-submit" class="btn btn-secondary" type="submit" value="Login" name="wp-submit">
                                        <input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
                                        <input type="hidden" value="1" name="testcookie">
                                    </p>
                                </form>
                            </div>
                            <div class="text-center pb-3">
                                <a href="/register" class="btn btn-link btn-link--dark">
                                    Maak nu een account
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </a>
                            </div>
                        </div>
                        <div class="c-login--info col-5 d-flex flex-column justify-content-center text-center">
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