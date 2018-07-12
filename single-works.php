<?php get_header(); ?>
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>   

<section id="area_blog_detail" <?php post_class('page'); ?>>
  <h2 class="entry-title"><?php the_title(); ?></h2>
    <div class="box_blog_cnt">
        <?php the_content(); ?>
    </div>
<?php 
    endwhile;
endif;
?>
<div class="btn_all"><a href="/works/">実績一覧へ戻る</a></div>
</section><!-- *** #news_cnt *** -->
<?php get_footer(); ?>

  
