<footer class="c-footer">
    <div class="c-footer-top py-3 py-md-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="c-footer-top__content col-lg-3 mb-4">
                    <div>
                        <div class="d-flex justify-content-center justify-content-sm-start">
                            <a href="<?php echo get_home_url(); ?>" class="c-logo-footer mb-2" title="Home">Sporezo</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                </div>
                <div class="c-footer-top__content col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div>
                        <h5>Handige links</h5>
                        <nav role="navigation" class="c-nav-footer">
                            <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'primary_navigation')); ?>
                        </nav>
                    </div>
                </div>
                <div class="c-footer-top__content col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div>
                        <h5>Praktische zaken</h5>
                        <nav role="navigation" class="c-nav-footer">
                            <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'footer_navigation')); ?>
                        </nav>
                    </div>
                </div>
                <div class="c-footer-top__content col-md-4 col-lg-3">
                    <div>
                        <h5>Contact</h5>
                        <ul class="flex-column justify-content-center align-items-start text-center text-sm-left">
                            <li class="d-flex mb-1">
                                <div class="">
                                    <p>Straatnaam 25</br>2000 Antwerpen</p>
                                </div>
                            </li>
                            <li class="d-flex mb-1">
                                <div>
                                    <a href="mailto:info.sporezo@gmail.com">info.sporezo@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div>
                                    <a href="">+32 1 23 45 56 78</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-footer-bottom py-4">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-left">
                    <p>Copyright 2020 - Lorem ipsum dolor sit amet consectetur</p>
                    <nav role="navigation" class="c-nav-legal">
                        <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'legal_navigation')); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>