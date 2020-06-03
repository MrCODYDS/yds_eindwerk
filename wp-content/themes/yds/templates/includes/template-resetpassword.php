<?php
/* Template Name: Template - Reset Password */
?>

<section class="c-forgotpassword py-4 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <div class="block-background py-4 py-md-5 px-3 px-md-4">
                            <h3><?php _e( 'Pick a New Password'); ?></h3>
                        
                            <form name="resetpassform" id="resetpassform" action="<?php echo site_url( 'wp-login.php?action=resetpass' ); ?>" method="post" autocomplete="off">
                                <input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $attributes['login'] ); ?>" autocomplete="off" />
                                <input type="hidden" name="rp_key" value="<?php echo esc_attr( $attributes['key'] ); ?>" />
                                
                                <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
                                    <?php foreach ( $attributes['errors'] as $error ) : ?>
                                        <p>
                                            <?php echo $error; ?>
                                        </p>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                        
                                <p>
                                    <label for="pass1"><?php _e( 'New password') ?></label>
                                    <input type="password" name="pass1" id="pass1" class="input" size="20" value="" autocomplete="off" />
                                </p>
                                <p>
                                    <label for="pass2"><?php _e( 'Repeat new password') ?></label>
                                    <input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" />
                                </p>
                                
                                <p class="description"><?php echo wp_get_password_hint(); ?></p>
                                
                                <p class="resetpass-submit">
                                    <input type="submit" name="submit" id="resetpass-button"
                                        class="button" value="<?php _e( 'Reset Password' ); ?>" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>