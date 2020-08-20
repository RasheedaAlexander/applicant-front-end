<?php get_header();?>
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

    <h1><?php the_content($more_link_text , $strip_teaser);?></h1>

    </div>

    <?php endwhile;?>
</div>
<?php get_footer();?>
