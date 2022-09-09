<div class="article_contents_Wrapper">
	<div class="article_contents">
    <?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
        <article class="p-article-card article-card card_horizon">
            <a href="<?php the_permalink(); ?>"></a>
            <div class="article-card_thumbnail">
                <?php if( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/eyecatch.jpg" width="100%" alt="No Image">
                <?php endif; ?>
            </div>
            <div class="article-card_textarea horizon">
                <p class="article-card_title horizon"><?php echo wp_trim_words( get_the_title(), 80, '...' ); ?></p>
                <time datetime="<?php the_time('Y-m-d'); ?>" <?php post_class('date'); ?> itemprop="datepublished"><?php the_time('Y/n/j'); ?></time>
            </div>
        </article>
    <?php 
        endwhile;
    else:
	?>
		<?php if( is_search() ): ?>
				<p>検索結果はありませんでした。</p>
			<?php else: ?>
				<p>記事が存在していません。</p>
		<?php endif; ?> 
	<?php endif; ?> 

	<!-- ページネーション -->
	<?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
	</div>
    <?php get_sidebar(); ?>
</div>

