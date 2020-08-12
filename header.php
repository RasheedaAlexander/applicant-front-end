<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta charset="utf-8"> -->
    <!-- <title></title> -->
    <?php wp_head(); ?>
  </head>
  <!-- allow WP to add own classes to body -->
  <body <?php body_class(); ?>>

<div class="container-fluid">
    <nav class="navbar navbar-dark bg-primary" id="bootstrap-overrides">

<button class="navbar-toggler pull-left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand mx-auto" href="<?php bloginfo('url')?>"><img src="./wp-content/themes/applicant-front-end/img/logo.svg"></a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php /* Primary navigation */
    wp_nav_menu( array(
      'menu' => 'top_menu',
      'depth' => 2,
      'container' => true,
      'menu_class' => 'navbar-nav mr-auto flex-column',
      'menu_id' => 'menu-main-menu',
      //Process nav menu using our custom nav walker
      'walker' => new wp_bootstrap_navwalker())
    );
    ?>
  </div>
</nav>
</div>
