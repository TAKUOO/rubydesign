<?php 
add_theme_support( 'post-thumbnails' );
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

function my_embed_style() {
    wp_enqueue_style('wp-embed-template-org', get_stylesheet_directory_uri() . '/wp-embed-template.min.css');
}
add_filter('embed_head', 'my_embed_style');


// 投稿ページのコメント欄のurlとメルアドを削除 
add_filter('comment_form_default_fields', 'mytheme_remove_url');
function mytheme_remove_url($arg) {
$arg['url'] = '';
$arg['email'] = '';
return $arg;
}

// メールアドレスが公開されることはありません。を削除
add_filter( "comment_form_defaults", "my_comment_notes_before");
function my_comment_notes_before( $defaults){
$defaults['comment_notes_before'] = '';
return $defaults;
}

// 次のHTML タグと属性が使えますを削除
add_filter("comment_form_defaults","my_special_comment_after");
function my_special_comment_after($args){
$args['comment_notes_after'] = '';
return $args;
}

// 投稿欄の順番入れ替え
function wp34731_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
 
    return $fields;
}
add_filter( 'comment_form_fields', 'wp34731_move_comment_field_to_bottom' );

//cookiの削除 
add_filter('comment_form_default_fields', 'comment_remove_cookiescheck');
function comment_remove_cookiescheck($arg) {
 $arg['cookies'] = '';
 return $arg;
}
?>