<?php
// Register nav walker class_alias
require_once('wp-bootstrap-navwalker.php');

//Theme support
function wpb_theme_setup(){
//nav Menus
register_nav_menus(array(
  'primary' => __('Primary Menu')

 ));
}
 add_action('after_setup_theme','wpb_theme_setup');

 function enqueue_bootstrap() {
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

// Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
