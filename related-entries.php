<div class="reccomend_Area article_contents">
    <h3>類似記事</h3>
    <?php
        //カテゴリ情報から関連記事を10個ランダムに呼び出す
        $categories = get_the_category($post->ID);
        $category_ID = array();
        foreach($categories as $category):
        array_push( $category_ID, $category -> cat_ID);
        endforeach ;
        $args = array(
        'post__not_in' => array($post -> ID),
        'posts_per_page'=> 4,
        'category__in' => $category_ID,
        'orderby' => 'rand',
        );
        $query = new WP_Query($args); ?>

        <?php if( $query -> have_posts() ): ?>
            <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                <article class="card_horizon">
                    <a href="<?php the_permalink(); ?>"></a>
                    <div class="eyecath">
                        <?php if( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/eyecatch.jpg" width="100%" alt="No Image">
                        <?php endif; ?> 
                    </div>
                    <div class="card_infoArea">
                        <div class="card_infoArea_textArea">
                            <p class="card_date">
                                <time datetime="<?php the_time('Y-m-d'); ?>" <?php post_class('date'); ?>>
                                    <?php the_time('Y/n/j'); ?></time>
                        </p>
                            <p class="text"><?php echo wp_trim_words( get_the_title(), 50, '...' ); ?></p>        </div>
                    </div>
                </article>
            <?php endwhile;
            ?>
        
        <?php else:?>
         <p>記事はありませんでした</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>
</div>