<footer class="c-footer py-5 py-md-4 py-lg-5">
    <div class="container">
        <div class="footer-top row">
            <div class="col-3 footer-top-content">
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
            </div>
            <div class="col-3 footer-top-content">
                <h5>Handige links</h5>
                <nav role="navigation" class="c-nav-footer">
                    <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => "flex-column align-items-start", 'theme_location' => 'primary_navigation')); ?>
                </nav>
            </div>
            <div class="col-3 footer-top-content">
                <h5>Praktische zaken</h5>
                <nav role="navigation" class="c-nav-footer">
                    <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => "flex-column align-items-start", 'theme_location' => 'footer_navigation')); ?>
                </nav>
            </div>
            <div class="col-3 footer-top-content">
                
            </div>
        </div>
        <div class="footer-bottom row">
            <div class="col">
                <p>Copyright 2020 - Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>
    </div>
</footer>