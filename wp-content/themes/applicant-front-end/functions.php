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

/*resetCSS*/
  wp_register_style('resetcss', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css', array(), false, '2.0');
  wp_enqueue_style('resetcss');
  /*Ends*/

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
wp_enqueue_style('bootstrap');

wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js()
{
  /*jQuery Reference*/
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1');
      wp_enqueue_script('jquery');
      /*End*/

  wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
  wp_enqueue_script('bootstrapjs');

  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', array(),false, true);
  wp_enqueue_script('customjs');


  // wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
  // wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('custom-logo', array(
  'height'      => 30,
	'width'       => 50,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array('site-title', 'site-description'),
) );

// register theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Authentic Campaigns
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'authenticcampaigns_front_page_template' );

$starter_content = array(
  // Default to a static front page and assign the front and posts pages.
  'options'     => array(
    'show_on_front'  => 'page',
    'page_on_front'  => '{{lunch-and-dinner-menu}}',
    'page_for_posts' => '{{blog}}',
  ),

  // Set the front page section theme mods to the IDs of the core-registered pages.
  'theme_mods'  => array(
    'panel_1' => '{{lunch-and-dinner-menu}}',
    'panel_2' => '{{about}}',
    'panel_3' => '{{blog}}',
    'panel_4' => '{{contact}}',
  ),
);

// customize read more text in have_posts
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More <img src="'.get_stylesheet_directory_uri().'/icons/cheveron-right.svg" alt="cheveron right"></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
