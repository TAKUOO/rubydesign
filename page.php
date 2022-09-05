<!doctype html>
  <html>
  <?php get_header(); ?>
  <?php include('contents_header.php'); ?>

  <main role="main" class="main-content">
    <div class="contents_Inner">
    <h1><?echo get_the_title() ?></h1>
        <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
        
      <?php the_content(); ?>

      <?php 
        endwhile;
      endif;
      ?>
    </div>
  </main>
<?php get_footer(); ?>
