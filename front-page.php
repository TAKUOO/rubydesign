<?php get_header(); ?>

<!-- ローディング start -->
  <div id="fv-loading-wrap">
     <div id="fv_logo_ruby">
          <div class="icn_logo_ruby"><img src="<?php echo get_template_directory_uri(); ?>/img/header/hdr_logo.svg" alt="RUBYDESIGN."></div>
      </div>
  </div>
<!-- ローディング end -->

<section id="topic_area">
  <div class="box_topic">
    <p><a href="https://rubydesign.jp/blog/wanted.html">随時募集 | 企業の人手不足を改善するフリーランスデザイナー募集!</a></p>
  </div>
</section>

<section id="tuyomi_area">
    <p class="tuyomi_copy">デザイナーとつくる、繋がる、企画する。</p>
    <p><span>webサービス開発に必要なUI/UXデザイナー、ブランディングや商品企画には欠かせないグラフィックデザイナーなど、ものづくりに関係のあるメンバーで構成するデザインチームです。ルビーデザインが相談を受け付け、必要なメンバーの提案やデザイナーの紹介を行います。</p>
    </section>

<!-- 実績 start -->
<section id="works_area">
  <div class="wrap_works">
     <h2>Works | <span> 実績</span></h2>   
    <div class="box_works">

    <?php
    $posts = get_posts(array(
    'posts_per_page' => 6, // 表示件数
    'category' => '3' // カテゴリIDもしくはスラッグ名
    ));
    ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

      <div class="worksbox">
    
        <a href="<?php the_permalink(); ?>">
          <p class="img_works">
            <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('large'); ?>            
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/icatch01.jpg" width="100%" alt="">
            <?php endif; ?>
          </p>
          <p class="name_works"><?php echo wp_trim_words( get_the_title(), 25, '...' ); ?></p>
        </a>
      </div>
      <?php endforeach; endif; ?>
    
    </div>

  </div>

<div class="btn_more"><a href="/works/">実績一覧へ</a></div>

</section>
<!-- 実績 end -->

<!-- ブログ start -->
<section id="blog_area">
  <h2>Blog | <span>ブログ</span></h2>
    <div class="box_blog">
    <?php
    $posts = get_posts(array(
    'posts_per_page' => 6, // 表示件数
    'category' => '4' // カテゴリIDもしくはスラッグ名
    ));
    ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

      <div class="blogbox clear_fix">

        <div class="img_blog">
         <?php if( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
          <?php else: ?>
          <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icatch01.jpg" width="100%" alt=""></a>
          <?php endif; ?>    
        </div>

        <div class="txtarea_topic">
          <a href="<?php the_permalink() ?>">
            <p class="date_blog"><time datetime="<?php the_time('Y-m-d'); ?>"<?php post_class('date'); ?>><?php the_time('Y/n/j'); ?></time></p>
            <p class="name_blog"><?php echo wp_trim_words( get_the_title(), 30, '...' ); ?></p>
<!--             <p class="txt_title_blog"><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>   -->  
          </a>
        </div>

      </div>
    <?php endforeach; endif; ?>
    </div>
  <div class="btn_more"><a href="/blog/">ブログ一覧へ</a></div>
</section>
<!-- ブログ end -->

<?php get_footer(); ?>
