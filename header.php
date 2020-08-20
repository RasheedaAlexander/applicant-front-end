<!DOCTYPE html>
<html id="my-html" lang="en">
  <head>
    <title>Rasheeda's WP Theme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <!-- allow WP to add own classes to body -->
  <body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-md navbar-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php
         $custom_logo_id = get_theme_mod( 'custom_logo' );
         $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>

    <a class="navbar-brand" href="<?php bloginfo('url')?>">
      <img src="./wp-content/themes/applicant-front-end/img/logo.svg" alt="hamburger logo">
    </a>

    <span class="navbar-text d-none d-md-block pl-2 text-white">Eats.</span>
  </nav>

<nav class="navbar navbar-expand-md navbar-dark flex-row nav-links">
  <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
    <?php
    wp_nav_menu( array(
      'menu' => 'top_menu',
      'depth' => 2,
      'container' => true,
      'menu_class' => 'navbar-nav mr-auto text-white',
      'menu_id' => 'menu-main-menu',
      // Process nav menu w/ custom nav walker
      'walker' => new wp_bootstrap_navwalker())
    );
    ?>
  </div>
</nav>
