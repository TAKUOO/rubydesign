<?php
$category = get_the_category();
$cats = get_the_category();

foreach( $cats as $cat_key => $cat ){
    $index_key = $cat_key;

//    if( $cat->category_parent == 0 ){
//        break;
//    }
    if( $post->post_name ){
        break;
    }
}

$cat_id   = $category[$index_key]->cat_ID;
$cat_name = $category[$index_key]->cat_name;
$cat_slug = $category[$index_key]->category_nicename;
?>


<!doctype html>
<html>
<?php get_header(); ?>
<?php include('contents_header.php'); ?>

<!-- コンテンツ -->
<main role="main">
	<section id="article_Area">
		<div class="contents_Inner">
            <h1>
                <?echo $cat_name; ?>
<!--                <pre>--><?//print_r(get_the_category())?><!--</pre>-->
            </h1>
			<?php get_template_part('loop', 'main'); ?>
		</div>
	</section>
</main>	

<?php get_footer(); ?>
</body>
</html>
