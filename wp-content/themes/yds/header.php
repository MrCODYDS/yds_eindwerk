<header class="c-header">
    <div class="c-header__top py-1">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <nav class="c-nav-sub d-none d-lg-flex">
                        <ul>
                            <li>
                                <a href="/login" class="btn btn-link btn-link--dark">Sign In</a>
                            </li>
                            <li>
                                <a href="/register" class=" btn btn-link btn-link--dark">Sign Up</a>
                            </li>
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
                    <div class="c-hamburger" onclick="changeHamburger(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>