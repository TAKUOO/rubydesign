<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 9, 'offset'=> 1, 'cat' => array('4', '40') ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
            <p class="text"><?php echo wp_trim_words( get_the_title(), 80, '...' ); ?></p>        </div>
    </div>
</article>
<?php endwhile;
?>