<?php get_header(); ?>
<?php include('contents_header.php'); ?>
<!-- コンテンツ -->
<main <?php post_class('page'); ?> role="main">
    <section id="single_area" class="content-inner">
        <?php 
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?> 
    <article>
        <!-- アイキャッチ -->
        <div class="eyecath --main">
            <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('full'); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/eyecatch.jpg" width="100%" alt="No Image">
            <?php endif; ?>
        </div>

        <!-- 情報エリア -->
        <div class="card_infoArea">
            <div class="card_infoArea_textArea">
                <h1 class="text"><?php echo wp_trim_words( get_the_title() ); ?></h1>
                <p class="card_date">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/n/j'); ?></time>
                </p>
            </div>
        </div>

        <div class="contents_Area">
            <div class="entries">
                <?php the_content(); ?>
            </div>

            <!-- タグの表示 -->
            <div class="tag_Area">
                <?php the_tags('', ''); ?>
            </div>

            <!-- 投稿者 -->
            <div class="Author_Area flex">
                <div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
            <div class="text_Area">
                <p class="name"><?php the_author(); ?></p>
                <p class="descripiton"><?php the_author_meta('user_description'); ?></p>
            </div>
        </div>

        <div class="ads_Area">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- rubydesign.jp -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-4554513594071722"
                 data-ad-slot="5019889240"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <!-- 関連記事 -->
        <?php include('related-entries.php'); ?>

        <!-- 前後の記事の表示 -->
        <div class="pager flex">
        <?php
        $prevpost = get_adjacent_post(false, '', true); //前の記事
        $nextpost = get_adjacent_post(false, '', false); //次の記事
        if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
        ?>
        <?php
        if ( $prevpost ) { //前の記事が存在しているとき
        echo
        '<div class="back">
        <a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '">
        <p class="pagelink">前の記事</p>
        <div class="post flex">
        ' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '
        <p class="title">' .wp_trim_words(get_the_title($prevpost->ID), 30, '...') .'</p>
        </div>
        </a>
        </div>';
        } else { //前の記事が存在しないとき
        echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
        </div></a></div>';
        }
        if ( $nextpost ) { //次の記事が存在しているとき
        echo
        '<div class="next">
        <a href="' . get_permalink($nextpost->ID) . '" title="' . get_the_title($nextpost->ID) . '">
        <p class="pagelink">前の記事</p>
        <div class="post flex">
        ' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '
        <p class="title">' .wp_trim_words(get_the_title($nextpost->ID), 30, '...') . '</p>
        </div>
        </a>
        </div>';
        } else { //次の記事が存在しないとき
        echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
        </div></a></div>';
        }
        ?>
        <?php } ?>
        </div>
        </div>
    </article>
    <?php 
    endwhile;
    endif;
    ?>
    <!--　サイドエリア  -->
    <aside>
        <a href="https://saketuma.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/banner_saketuma.png" alt="SAKETUMAのバナー" loading="lazy" class="banner-image"></a>
        <?php dynamic_sidebar( 'widget_area01' ); ?>
    </aside>
    </section>
</main>
<?php get_footer(); ?>

