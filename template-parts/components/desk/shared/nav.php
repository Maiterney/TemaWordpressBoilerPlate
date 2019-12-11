<nav>
    <div class="logo">
        <?php if ( ! has_custom_logo() ) { ?>
        <?php if ( is_front_page() && is_home() ) : ?>
        <div class="logo-controller">
            <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>

        <?php else : ?>

        <div class="logo-controller">
            <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>


        <?php endif; ?>

        <?php } else {
                    the_custom_logo();
                } ?>
    </div>
    <?php if ( is_active_sidebar( 'topbar' ) ) : ?>
    <div class="row">
        <div class="col-6 col-md-8 hidden-lg topbar topbar-left-in">
            <?php dynamic_sidebar( 'topbar' ); ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="menu-controller">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'AgenciaOpen_menu_fallback' ) ); ?>
    </div>
    <div class="search">
        <i class="icon icon-lupa"></i>
    </div>
</nav>