<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />
    <script src="node_modules/aos/dist/aos.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'camp' ); ?></a>

        <header id="masthead" class="header" hidden>

            <nav id="site-navigation" class="nav container">

                <?php wp_nav_menu(
					array(
						'theme_location'  => 'mobile-menu',
						'container_class' => 'mobile-menu nav__item nav__item--mobile',
						'container_id'    => '',
						'menu_class'      => 'mobile-menu__list nav__list nav__list--mobile',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 2,
						'walker'          => new Walker_Nav_Menu(),
					)
				); ?>
                <!-- The WordPress Menu goes here -->
                <div class="site-branding <?php if(is_front_page()) echo 'site-branding--light'; ?> nav__item">
                    <?php the_custom_logo();?>
                </div><!-- .site-branding -->
                <?php wp_nav_menu(
					array(
						'theme_location'  => 'main-menu',
						'container_class' => 'main-menu nav__item nav__item--desktop',
						'container_id'    => '',
						'menu_class'      => 'main-menu__list nav__list',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 2,
						'walker'          => new Walker_Nav_Menu(),
					)
					
				); ?>

                <button class="menu-btn" aria-controls="mobile-menu">
                    <div class="menu-btn__burger"></div>
                </button>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->