<?php
$category = get_the_category();
$cat_id   = $category[0]->cat_ID;
$cat_name = $category[0]->cat_name;
$cat_slug = $category[0]->category_nicename;
?>

<!-- カテゴリーIDを表示したい所に-->
<?php echo $cat_id; ?>

<!--カテゴリー名を表示したい所に-->
<?php echo $cat_name; ?>

<!--カテゴリースラッグを表示したい所に-->
<?php echo $cat_slug; ?>

<!doctype html>
<html>
<?php get_header(); ?>
<?php include('contents_header.php'); ?>

<!-- コンテンツ -->
<main role="main">
	<section id="article_Area">
		<div class="contents_Inner">
			<h1><?echo get_the_category()?></h1>
			<?php get_template_part('loop', 'main'); ?>
		</div>
	</section>
</main>	

<?php get_footer(); ?>
</body>
</html>
