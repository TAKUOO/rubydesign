<?php get_header(); ?>
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>   

<section id="area_blog_detail" <?php post_class('page'); ?>>
  <h2 class="entry-title"><?php the_title(); ?></h2>
    <div class="date_news_dtl">
          <div class="time_date"><time datetime="<?php the_time('Y-m-d'); ?>"<?php post_class('date'); ?>><?php the_time('Y/n/j'); ?></time></div>
          <div class="ctg"><?php the_category(); ?></div>
    </div>
    <div class="box_blog_cnt">
        <?php the_content(); ?>
    </div>
<?php 
    endwhile;
endif;
?>

<?php comments_template(); ?>

<div class="blog_pr">
<h2>Profile | <span>プロフィール</span></h2>
<div class="clear_fix">
  <div class="box_l">
    <p class="img_pr"><img src="<?php echo get_template_directory_uri(); ?>/img/common/img_matsui.jpg" alt="松井貴史"></p>
  </div>
  <div class="box_r">
    <p class="blog_pr_name">松井貴史</p>
    <p class="blog_pr_about">1984年熊本生まれ。デジタルを軸に福岡でブランドづくりを行う事務所<a href="http://rubydesign.jp" target="_blank">RUBYDESIGN.</a>代表。ホームページ相談窓口SmoLLを運営。[<a href="https://smoll.jp/about/">詳しいプロフィール</a>]
    </p>
  </div>
</div>
</div>
</section><!-- *** #news_cnt *** -->
<?php get_footer(); ?>

  
