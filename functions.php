<?php
function load_stylesheets()
{

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
