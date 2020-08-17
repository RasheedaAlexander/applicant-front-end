<!doctype html>
<html id="my-html" lang="en">
  <head>
    <title>Rasheeda's WP Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <!-- allow WP to add own classes to body -->
  <body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-md navbar-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <a class="navbar-brand pl-1 mx-sm-0" href="<?php bloginfo('url')?>">
      <img src="./wp-content/themes/applicant-front-end/img/logo.svg" alt="hamburger logo">
    </a>

    <span class="navbar-text d-none d-md-block pl-2 text-white">Eats.</span>
  </nav>

<nav class="navbar navbar-expand-md navbar-dark flex-row pt-0 pb-0 nav-links">
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
