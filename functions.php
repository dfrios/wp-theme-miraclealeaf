<?php
/**
 * @package MiracleLeaf
 */

include_once('functions-woocommerce.php');


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Register navigation menu
function miracleleaf_add_menu() {
  register_nav_menu('header-menu',__('Header Menu'));
}

// Register logo capability
function miracleleaf_site_logo($wp_customize) {

  //Settings
  $wp_customize->add_setting('site_logo');//Setting for logo uploader

  //Controls
  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'site_logo',
          array(
              'label'      => 'Logo del sitio',
              'section'    => 'title_tagline',
              'settings'   => 'site_logo'
          )
      )
  );
}



add_action('init', 'miracleleaf_add_menu' );
add_action('customize_register', 'miracleleaf_site_logo');