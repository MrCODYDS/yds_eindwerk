<footer class="c-footer">
    <div class="c-footer-top py-5 py-md-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="c-footer-top__content col-3 d-flex justify-content-center">
                    <div>
                        <div>
                            Dit is het logo
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                </div>
                <div class="c-footer-top__content col-3 d-flex justify-content-center">
                    <div>
                        <h5>Handige links</h5>
                        <nav role="navigation" class="c-nav-footer">
                            <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => "flex-column align-items-start", 'theme_location' => 'primary_navigation')); ?>
                        </nav>
                    </div>
                </div>
                <div class="c-footer-top__content col-3 d-flex justify-content-center">
                    <div>
                        <h5>Praktische zaken</h5>
                        <nav role="navigation" class="c-nav-footer">
                            <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => "flex-column align-items-start", 'theme_location' => 'footer_navigation')); ?>
                        </nav>
                    </div>
                </div>
                <div class="c-footer-top__content col-3 d-flex justify-content-center">
                    <div>
                        <h5>Contact</h5>
                        <ul class="flex-column justify-content-center align-items-start">
                            <li class="d-flex mb-3">
                                <img src="" alt="">
                                <div>
                                    <p>2000 Antwerpen (HQ)</p>
                                    <p>Straatnaam 25- Belgium</p>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <img src="" alt="">
                                <div>
                                    <p>yarne@info.com</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <img src="" alt="">
                                <div>
                                    <p>+32 1 23 45 56 78</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-footer-bottom py-5 py-md-4 py-lg-5">
        <div class="container">
            <div class="footer-bottom row">
                <div class="col">
                    <p>Copyright 2020 - Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
    </div>
</footer>