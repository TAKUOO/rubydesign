<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'cat' => 27 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
    <dl class="flex">
        <dt class="date">
            <time datetime="<?php the_time('Y-m-d'); ?>" <?php post_class('date'); ?>><?php the_time('Y/n/j'); ?></time>
        </dt>
        <dd class="subject">
            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 20, '...' ); ?></a>
        </dd>
    </dl>
</li>
<?php endwhile;
?>