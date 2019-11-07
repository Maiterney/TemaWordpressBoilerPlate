<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package master12
 */

$container = get_theme_mod( 'master12_container_type' );
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800" rel="stylesheet"> 
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="hfeed site" id="page">
            <header id="masthead" class="site-header">
                <div class="header-wrap">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                              <div class="col-12 col-md-4 col-sm-12 topbar">
                                <!-- LOGO -->
                                 <div class="logo">
                                    <?php if ( ! has_custom_logo() ) { ?>

                                    <?php if ( is_front_page() && is_home() ) : ?>

                                    <h1 class="logo">
                                        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                            <?php bloginfo( 'name' ); ?>
                                        </a>
                                    </h1>

                                    <?php else : ?>

                                    <a class="logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                        <?php bloginfo( 'name' ); ?>
                                    </a>

                                    <?php endif; ?>

                                    <?php } else {
                                    the_custom_logo();
                                    } ?>
                                </div>
                                <!-- END LOGO -->
                              </div>

                            <?php if ( is_active_sidebar( 'topbar' ) ) : ?>
                                  <div class="col-6 col-md-8 hidden-lg topbar topbar-left-in">
                                    <?php dynamic_sidebar( 'topbar' ); ?>
                                  </div>
                            <?php endif; ?>

                            </div>   
                    </div>
                    <div class="row justify-content-between align-items-center bg-evidencia-1 menu-evidencia">
                            <div class="container">
                                <div class="close-menu close-menu-body"></div>
                                <div class="btn-menu"></div>
                                <nav id="mainnav" class="mainnav" role="navigation">
                                    <!-- <div>
                                        <i class="fa fa-times close-menu close-menu-mainnav"></i>
                                    </div> -->
                                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'master12_menu_fallback' ) ); ?>
                                </nav>
                                <!-- #site-navigation -->
                            </div>
                        </div>
                </div>
            </header>
            <!-- #masthead -->