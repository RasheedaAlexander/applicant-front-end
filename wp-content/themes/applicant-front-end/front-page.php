<?php get_header();?>

<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<div class="container-fluid">


    <?php while ( have_posts() ) : the_post();?>
<div class="row">
    <div class="col-md-7">

      <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid mt-3', 'id' => 'feature-img', 'title' => 'Feature image'));?>

    </div>

    <div class="col-md-5">

      <p class="date mt-4 mb-0"><?php the_date();?></p>

      <h3 class="blog-title">

        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php the_title(); ?></a>
      </h3>

    <?php the_content($more_link_text , $strip_teaser);?>

    </div>

    <?php endwhile;?>
</div>
<?php get_footer();?>
