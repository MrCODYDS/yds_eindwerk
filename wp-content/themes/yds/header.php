<header class="c-header py-2 py-lg-4">
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
                <nav role="navigation" class="c-nav-main">
                    <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'primary_navigation')); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
