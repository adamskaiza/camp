<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function register_my_menus() {

    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'site-menu' => __( 'Site Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );