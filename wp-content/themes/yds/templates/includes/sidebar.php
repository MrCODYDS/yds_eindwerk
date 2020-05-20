<aside class="c-sidebar">
	<div class="c-sidebar-inner py-2">
        <div class="c-sidebar__close d-flex mx-4">
            <div class="c-hamburger c-hamburger-open is-open">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="mt-5 px-4">
            <div class="text-center mb-4">
                <h3 class="text-white">John Doe</h3>
            </div>
            <div class="d-flex justify-content-between">
                <a href="" class="btn btn-outline btn-outline--mobile">Reservations</a>
                <a href="" class="btn btn-outline btn-outline--mobile">Log out</a>
            </div>
        </div>
        <hr class="c-sidebar__spacing mx-4 mb-0">
        <nav role="navigation" class="c-nav-sidebar">
            
            <?php
                wp_nav_menu( array('theme_location'  => 'primary_navigation','container'  => false,'container_id'  => '','conatiner_class' => '','menu_class'  => 'top-nav nav-right','echo'  => true,'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth'  => 10, 'walker' => new fluent_themes_custom_walker_nav_menu) );
            ?>
        </nav>
	</div>
</aside>
