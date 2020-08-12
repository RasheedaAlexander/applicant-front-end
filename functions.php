<?php
function load_stylesheets()
{
  /* Theme setup */
  add_action( 'after_setup_theme', 'wpt_setup' );
      if ( ! function_exists( 'wpt_setup' ) ):
          function wpt_setup() {
              register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
          } endif;

  // Register custom navigation walker
  require_once('class-wp-bootstrap-navwalker.php');

  /*Navigation Menus*/
  function register_my_menu() {
    register_nav_menu('top-menu',__( 'Top Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  /*End*/

  /*jQuery Reference*/
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1');
      wp_enqueue_script('jquery');
      /*End*/

  wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
  wp_enqueue_script('bootstrapjs');

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
wp_enqueue_style('bootstrap');

wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js()
{


  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
  wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
// register_nav_menus(
//   array(
//
//     'top_menu' => __('Top Menu', 'theme'),
//   )
//
// );
