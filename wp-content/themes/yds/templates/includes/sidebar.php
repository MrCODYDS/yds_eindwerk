<?php

    global $current_user;

?>

<aside class="c-sidebar">
	<div class="c-sidebar-inner py-3">
        <div class="c-sidebar__close d-flex mx-4">
            <div class="c-hamburger c-hamburger-open is-open">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="mt-5 px-4 pb-2">
            <?php if(is_user_logged_in()): ?>
                <div class="text-center mb-4">
                    <h3 class="text-white c-sidebar__user"><?php echo "Hi, " . $current_user->user_login ?></h3>
                </div>
                <div class="d-flex justify-content-between">
                <a href="/profiel" class="btn btn-outline btn-outline--mobile">Reservations</a>
                    <a href="<?php echo wp_logout_url() ?>" class="btn btn-outline btn-outline--mobile">Log out</a>
                </div>
            <?php else: ?>
                <div class="d-flex justify-content-between">
                    <a href="/login" class="btn btn-outline btn-outline--mobile">Log In</a>
                    <a href="/register" class="btn btn-outline btn-outline--mobile">Sign Up</a>
                </div>
            <?php endif; ?>
        </div>
        <hr class="c-sidebar__spacing mx-4">
        <nav role="navigation" class="c-nav-sidebar">
            <?php
                wp_nav_menu( array('theme_location'  => 'primary_navigation','container'  => false,'container_id'  => '','container_class' => '','menu_class'  => 'top-nav nav-right','echo'  => true,'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth'  => 10, 'walker' => new fluent_themes_custom_walker_nav_menu) );
            ?>
        </nav>
	</div>
</aside>
