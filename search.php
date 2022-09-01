<!doctype html>
<html>
<?php get_header(); ?>
<?php include('contents_header.php'); ?>

<!-- コンテンツ -->
<main role="main">
	<section id="article_Area">
		<div class="contents_Inner">
			<h1>"<?php the_search_query('')?>"の検索結果</h1>
			<?php get_template_part('loop', 'main'); ?>
		</div>
	</section>
</main>	

<?php get_footer(); ?>
</body>
</html>
