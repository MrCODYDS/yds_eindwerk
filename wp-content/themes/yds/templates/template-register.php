<?php
/* Template Name: Template - Register */

$redirect_to = '';
?>



<section class="c-login d-flex align-items-center py-6">
    <div class="container">
        <div class="c-login-content row justify-content-center ">
            <div class="c-login-content__login col-md-7 col-xl-5">
                <div class='login-part-login d-flex justify-content-center align-items-center bg-white'>
                    <form name="loginform" id="loginform" class="text-center" action="<?php echo site_url( '/wp-login.php?action=register' ); ?>" method="post">
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
            </div>
            <div class="c-login-content__register col-md-5 col-xl-3 order-md-first">
                <div class="login-part-register d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="text-white mb-4">Al een account?</h5>
                    <div class="register-button py-3">
                        <a href="/login" class="btn btn-outline btn-outline--blue">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>