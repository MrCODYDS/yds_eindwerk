<?php
/* Template Name: Template - Login */

$redirect_to = '';
?>

<section class="c-login py-4 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row c-login-content">
                    <div class="c-login-content--first col-lg-7">
                        <div class="c-login--login d-flex flex-column justify-content-around">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <div class="c-login__image"></div>
                                <h5 class="text-dark mt-2 d-block d-lg-none">Log in</h5>
                                <form name="loginform" id="loginform" class="text-center mt-5 px-4 px-sm-6 px-md-8 px-lg-5 px-xl-7 px-xxl-8" action="<?php echo wp_login_url(); ?>" method="post">
                                    <p>
                                        <label for="user_login" class="label-hide"></label>
                                        <input id="user_login" type="text" value="" name="log" placeholder="Gebruikersnaam">
                                    </p>
                                    <p>
                                        <label for="user_pass" class="label-hide"></label>
                                        <input id="user_pass" type="password" value="" name="pwd" placeholder="Wachtwoord">
                                    </p>
                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                        <p class="text-dark m-0">
                                            <input id="rememberme" type="checkbox" value="forever" name="rememberme">
                                            <label for="rememberme">Remember me</label>
                                        </p>
                                        <a href="<?php echo esc_url( wp_lostpassword_url( get_permalink() ) ); ?>" alt="<?php esc_attr_e( 'Forgot your password?', 'textdomain' ); ?>" class="text-dark">
                                            <?php esc_html_e( 'Forgot your password?', 'textdomain' ); ?>
                                        </a>
                                    </div>
                                    <p class="mt-3 mb-0">
                                        <input id="wp-submit" class="btn btn-secondary btn-stretched" type="submit" value="Login" name="wp-submit">
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