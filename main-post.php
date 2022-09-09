<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1,) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<article class="p-article-card article-card card_large">
    <a href="<?php the_permalink(); ?>"></a>
    <div class="article-card_thumbnail">
        <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('large'); ?>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/eyecatch.jpg" width="100%" alt="No Image">
        <?php endif; ?> 
    </div>
    <div class="article-card_textarea">
        <h3 class="article-card_title"><?php echo wp_trim_words( get_the_title(), 80, '...' ); ?></h3>
        <time datetime="<?php the_time('Y-m-d'); ?>" <?php post_class('date'); ?> itemprop="datepublished"><?php the_time('Y/n/j'); ?></time>
        <p class="article-card_desc"><?php echo wp_trim_words( get_the_content(), 100, '...' ); ?></p>
    </div>
</article>
<?php endwhile;
?>