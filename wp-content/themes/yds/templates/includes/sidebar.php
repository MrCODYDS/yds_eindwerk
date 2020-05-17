<aside class="c-sidebar">
	<div class="c-sidebar-inner p-2">
        <div class="c-sidebar-logo d-flex justify-content-center">
            <a href="<?php echo get_home_url(); ?>" class="c-logo" title="Home">
                <div>
                    Dit is het logo
                </div>
            </a>
        </div>
        <nav role="navigation" class="c-nav-sidebar">
            <?php wp_nav_menu( array( 'container'=> 'ul', 'menu_class'=> "text-center", 'theme_location' => 'primary_navigation' ) ); ?>
        </nav>
	</div>
</aside>
