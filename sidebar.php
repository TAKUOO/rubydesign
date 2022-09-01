<aside class="aside">
    <section class="aside_content banner_area">
    </section>
    <section id="categorys" class="sideContent_Area">
        <h3 class="sidebar_title">記事カテゴリー</h3>
        <ul>
            <?php
            $args = array(
                'title_li' => '',  //見出しを削除
                'show_count' => true, //投稿数の表示
                'post_html' =>'<li class="cat-item"><a href=""></a></li>'
            );
            wp_list_categories( $args );
            ?>
        </ul>
    </section>
    <!-- <div id="popular" class="aside_block card">
    <h2>人気の記事</h2>
    <?php
    if (function_exists('wpp_get_mostpopular')) {
        $options = array(
            'limit' => 5, // 表示件数の指定
            'range' => 'all', // 集計期間 'daily', 'weekly', 'monthly', 'all'
            'order_by' => 'views', // 集計の並び替え 'comments', 'views', 'avg'
            'post_type' => 'post,page', // 集計対象指定
            'pid' => '2,6', // 除外する記事・固定ページのidで指定
            'cat' => '-2', // 対象カテゴリー設定 idで指定 マイナスで除外
            'stats_views' => '1', /*閲覧数を表示させる*/
            'thumbnail_width' => '', /*画像のwidth（px）*/
            'thumbnail_height' => '', /*画像のheight（px）*/
            'post_html' => '<li class="sidebar_list"><article class="list_box"><div class="list_ttl">{title}</div><div class="img_thum">{thumb}</div></article></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
        );
        wpp_get_mostpopular($options);
    }
    ?>
  </div> -->
    <div id="search" class="aside_block card">
        <h2 class="sidebar_ttl">サイト内検索</h2>
        <div class="aside_block_content">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="banner_area_item card">
    </div>
</aside>