<?php

    global $current_user;

?>

<header class="c-header">
    <div class="c-header__top py-1 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <nav class="c-nav-sub d-flex">
                        <ul>
                            <?php if(is_user_logged_in()): ?>
                                <li>
                                    <a href="/wp-login.php?action=logout" class="btn btn-link btn-link--dark h-100">
                                        <?php echo "Hi, " . $current_user->user_login ?>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="/login" class="btn btn-link btn-link--dark h-100">Sign In</a>
                                </li>
                                <li>
                                    <a href="/register" class="btn btn-link btn-link--dark h-100">Sign Up</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="c-header__bottom py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-auto d-flex align-items-center">
                    <a href="<?php echo get_home_url(); ?>" class="c-logo" title="Home">
                        <div>
                            Dit is het logo
                        </div>
                    </a>
                </div>
                <div class="col-auto ml-auto text-right">
                    <nav role="navigation" class="c-nav-main d-none d-lg-flex">
                        <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'primary_navigation')); ?>
                    </nav>
                    <div class="c-hamburger">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>