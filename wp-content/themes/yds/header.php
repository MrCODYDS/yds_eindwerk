<?php

    global $current_user;

?>

<header class="c-header">
    <div class="c-header__top py-2 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <nav class="c-nav-sub d-flex">
                        <ul>
                            <?php if(is_user_logged_in()): ?>
                                <li>
                                    <a href="/user-reservations" class="btn btn-link h-100">
                                        <?php echo "Mijn reservaties" ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo wp_logout_url() ?>" class="btn btn-link h-100">
                                        <?php echo "Logout" ?>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="/login" class="btn btn-link h-100">Log In</a>
                                </li>
                                <li>
                                    <a href="/register" class="btn btn-link h-100">Sign Up</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="c-header__line d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col"><hr></div>
            </div>
        </div>
    </div>
    <div class="c-header__bottom py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto d-flex align-items-center">
                    <a href="<?php echo get_home_url(); ?>" class="c-logo" title="Home">Barezo</a>
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

<div class="headerHeight"></div>