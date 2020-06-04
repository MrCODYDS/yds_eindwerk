<?php
/* Template Name: Template - Lost Password */
?>


<section class="c-forgotpassword py-4 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <div class="block-background py-4 py-md-5 px-3 px-md-4">
                            <h3><?php _e( 'Forgot Your Password?'); ?></h3>
                            <p>
                                <?php
                                    _e(
                                        "Enter your email address and we'll send you a link you can use to pick a new password.",
                                        'personalize_login'
                                    );
                                ?>
                            </p>

                            <form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
                                <p class="">
                                    <label for="user_login"><?php _e( 'Email' ); ?>
                                    <input type="text" name="user_login" id="user_login">
                                </p>

                                <p class="m-0">
                                    <input type="submit" name="submit" class="btn btn-secondary"
                                        value="<?php _e( 'Reset Password' ); ?>"/>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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