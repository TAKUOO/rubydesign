<div class="article_contents_Wrapper">
	<div class="article_contents">
    <?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
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
					<p class="text"><?php echo wp_trim_words( get_the_title(), 80, '...' ); ?></p>
				</div>
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
	<aside>
		<?php dynamic_sidebar( 'widget_area01' ); ?>
	</aside>
</div>

