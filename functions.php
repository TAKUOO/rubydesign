<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );

function my_contact_enqueue_scripts(){
    wp_deregister_script('contact-form-7');
    wp_deregister_style('contact-form-7');
    if (is_page('contact')) {
     if (function_exists( 'wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
     }
     if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
     wpcf7_enqueue_styles();
     }
    }
    }
    add_action( 'wp_enqueue_scripts', 'my_contact_enqueue_scripts');

if ( function_exists( 'register_sidebar' ) ) {
        register_sidebar( array(
        'name' => 'サイドバー',
        'id' => 'widget_area01',
        'before_widget' => '<section id="%1$s" class="sideContent_Area">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        )
    );
};



function wpcf7_validation_textarea_hiragana($result, $tag)
{
    $name = $tag['name'];
    $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';

    if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
        $result['valid'] = false;
        $result['reason'] = array($name => 'エラー / この内容は送信できません。');
    }

    return $result;
}

// 記事内の目次設定
function my_add_content( $content ) {
    if ( is_single() ) {
        // 属性を持たないh2・h3要素を正規表現で表すパターン
        $pattern = '/<h[2-3]>(.*?)<\/h[2-3]>/i';
        // 本文の中から、すべてのh2・h3要素を検索
        preg_match_all( $pattern, $content, $matches, PREG_SET_ORDER );

        // ページ内のh2・h3要素が3つ以上の場合に目次を出力
        if( count( $matches ) > 3 ){
            // 目次の出力に使用する変数
            $toc = '<p class="mokuji_title">目次</p><ul>';
            // 目次の階層の判断に使用する変数
            $hierarchy = NULL;
            // ループ回数を数える変数
            $i = 0;

            // 本文内のh2・h3要素を上から順番にループで処理
            foreach( $matches as $element ){
                // ループ回数を1加算
                $i++;
                // h2・h3に指定するIDの属性値を作成
                $id = 'chapter-' . $i;
                // h2・h3タグにIDを追加
                $chapter = preg_replace( '/<(.+?)>(.+?)<\/(.+?)>/',  '<$1 id ="' . $id . '">$2</$3>', $element[0] );
                // ページ内のh2・h3要素を、IDが追加されているh2・h3要素に置換
                $content = preg_replace( $pattern, $chapter, $content, 1);

                // 現在のループで扱う要素を判断する条件分岐
                if( strpos( $element[0], '<h2' ) === 0 ){
                    $level = 0;
                }else{
                    $level = 1;
                }

                //現在の状態を判断する条件分岐
                if( $hierarchy === $level ){ // h2またはh3がそれぞれ連続する場合
                    $toc .= '</li>';
                }elseif( $hierarchy < $level ){ // h2の次がh3となる場合
                    $toc .= '<ul>';
                    $hierarchy = 1;
                }elseif( $hierarchy > $level ){ // h3の次がh2となる場合
                    $toc .= '</li></ul></li>';
                    $hierarchy = 0;
                }elseif( $i == 1 ){ // ループ1回目の場合
                    $hierarchy = 0;
                }

                // 目次の項目で使用する要素を指定
                $title = $element[1];
                // 目次の項目を作成。※次のループで<li>の直下に<ol>タグを出力する場合ががあるので、ここでは<li>タグを閉じていません。
                $toc .= '<li><a href="#' . $id . '">' . $title . '</a>';
            }

            // 目次の最後の項目をどの要素から作成したかによりタグの閉じ方を変更
            if( $level == 0 ){
                $toc .= '</li></ul>';
            }elseif( $level == 1 ){
                $toc .= '</li></ul></li></ul>';
            }

            // 本文に目次を追加
            $content = '<nav class="mokuji">'.$toc.'</nav>'. $content;
        }
    }
    return $content;
}
add_filter( 'the_content', 'my_add_content' );

function sample_theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'sample_theme_slug_setup' );