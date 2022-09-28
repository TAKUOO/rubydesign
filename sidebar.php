<aside class="aside">
    <section class="aside_content banner_area">
        <a href="<?php the_permalink(); ?>/dev_service/wanted-partner.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/wanted-partner.jpg" alt="リモートでWEB制作・開発をサポートしていただけるデザイナー/プログラマーを募集！のバナー" loading="lazy" class="banner-image"></a>
    </section>

    <!-- 投稿者 -->
    <section class="profile_info">
        <div class="profile_info__avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
        <div class="profile_info__text">
            <b class="profile_info__name"><?php the_author(); ?></b>
            <div class="profile_info__description"><?php the_author_meta('user_description'); ?></div>
            <div class="twitter-button"><a href="https://twitter.com/matui_takafumi?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-lang="ja" data-show-count="false">Follow @matui_takafumi</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
        </div>
    </section>


    <section id="categorys" class="sideContent_Area">
        <h2 class="sidebar_title">記事カテゴリー</h2>
        <ul class="cat-items">
            <?php
            $args = array(
                'title_li' => '',  //見出しを削除
                'show_count' => true, //投稿数の表示
                'post_html' =>'<li class="cat-item"><a href="{url}"></a></li>'
            );
            wp_list_categories( $args );
            ?>
        </ul>
    </section>

    <section id="popular" class="sideContent_Area">
        <h2>人気の記事</h2>
        <?php
        if (function_exists('wpp_get_mostpopular')) {
            $options = array(
                'limit' => 4, // 表示件数の指定
                'stats_date'=> '1', // 日付
                'range' => 'all', // 集計期間 'daily', 'weekly', 'monthly', 'all'
                'order_by' => 'views', // 集計の並び替え 'comments', 'views', 'avg'
                'post_type' => 'post,page', // 集計対象指定
                'pid' => '2,6', // 除外する記事・固定ページのidで指定
                'cat' => '-2', // 対象カテゴリー設定 idで指定 マイナスで除外
                'stats_views' => '1', /*閲覧数を表示させる*/
                'thumbnail_width' => '1024', /*画像のwidth（px）*/
                'thumbnail_height' => '637', /*画像のheight（px）*/
                'wpp_start' => '<div class="p-article-cards">',
                'wpp_end' => '</div>',
                'post_html' => '<article class="p-article-card article-card card_large"><a href="{url}"></a><div class="article-card_thumbnail">{thumb_img}</div><div class="article-card_textarea"><h3 class="article-card_title aside">{text_title}</h3><time>{date}</time></div></article>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
            );
            wpp_get_mostpopular($options);
        }
        ?>
      </section>
    <div class="banner_area_item card">
    </div>
</aside>