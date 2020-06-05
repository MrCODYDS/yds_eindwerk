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