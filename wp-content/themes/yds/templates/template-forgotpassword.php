<?php
/* Template Name: Template - Lost Password */
?>

<div id="password-lost-form" class="widecolumn">>
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
        <p class="form-row">
            <label for="user_login"><?php _e( 'Email' ); ?>
            <input type="text" name="user_login" id="user_login">
        </p>
 
        <p class="lostpassword-submit">
            <input type="submit" name="submit" class="lostpassword-button"
                   value="<?php _e( 'Reset Password' ); ?>"/>
        </p>
    </form>
</div>