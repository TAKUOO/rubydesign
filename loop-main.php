<div class="box_blog">
    <?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('blogbox'); ?>>
            <div class="img_blog">
               <?php if( has_post_thumbnail() ): ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                <?php else: ?>
                <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icatch01.jpg" width="100%" alt=""></a>
                <?php endif; ?>   
            </div>
            <div class="date_blog"><time datetime="<?php the_time('Y-m-d'); ?>"<?php post_class('date'); ?>><?php the_time('Y/n/j'); ?></time></div>
            <p class="name_blog"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 25, '...' ); ?></a></p>  
        </div>

    <?php 
        endwhile;
    endif;
    ?>

</div>
<?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
