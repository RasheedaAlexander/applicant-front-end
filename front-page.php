<?php get_header();?>
<div class="container-fluid">


    <?php

            while ( have_posts() ) : the_post();?>
<div class="row">
    <div class="col-sm-8">

      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'id' => 'feature-img', 'title' => 'Feature image']);?>


    </div>

    <div class="col-sm-4">

      <p class="date"><?php the_date();?></p>

      <h2 class="blog-title">

        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php the_title(); ?></a>

      </h2>

    <?php the_content($more_link_text , $strip_teaser );?>

    </div>

    <?php endwhile;?>
</div>
  </div>
  <?php get_footer();?>
