<footer class="c-footer">
    <div class="c-footer-top py-3 py-md-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="c-footer-top__content col-lg-3 mb-4">
                    <div>
                        <div class="d-flex justify-content-center justify-content-sm-start">
                            <a href="<?php echo get_home_url(); ?>" class="c-logo-footer mb-2" title="Home">Sporezo</a>
                        </div>
                        <p>Bel je sportmaatje, kies een datum en uur, reserveer een veld en je ontspanning kan starten.</p>
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
                        <h5>Algemene info</h5>
                        <nav role="navigation" class="c-nav-footer">
                            <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'footer_navigation')); ?>
                        </nav>
                    </div>
                </div>
                <div class="c-footer-top__content col-md-4 col-lg-3">
                    <div>
                        <h5>Contact</h5>
                        <ul class="d-flex flex-column justify-content-center align-items-center align-items-sm-start">
                            <li class="d-flex mb-1">
                                <div class="">
                                    <p>Rozengaard 87</br>2550 Kontich</p>
                                </div>
                            </li>
                            <li class="d-flex mb-1">
                                <div>
                                    <a href="mailto:info.sporezo@gmail.com">info.sporezo@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div>
                                    <a href="tel:0032496344257">+32 4 96 34 42 57</a>
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
                    <p>Copyright <?php echo date("Y"); ?> - Sporezo</p>
                    <nav role="navigation" class="c-nav-legal">
                        <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => false, 'theme_location' => 'legal_navigation')); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>