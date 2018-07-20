<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<?php if(is_home()): ?>
<title><?php bloginfo('name'); ?></title>
<?php else: ?>
<title><?php wp_title(' - ',true,'right'); ?></title>
<?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="UIデザイン,WEBデザイン,webサービスデザイン"/>
<meta name="description" content="デザイナーとつくる、繋がる、企画する。フリーのUI/UXデザイナー、グラフィックデザイナーなどwebサービス開発に必要なメンバーが在籍する参加型のデザインチーム。" />
<meta name="ROBOTS" content="INDEX, FOLLOW">
<meta name="google-site-verification" content="r3ej5W3S5B-VlOkykzenzjQ0zdwuDwr4zw2wepMZYDY" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<link rel="index" href="https://rubydesign.jp/index.html" />
<link rel="shortcut icon" href="https://rubydesign.jp/favicon.ico" />
<link rel="apple-touch-icon" href="https://rubydesign.jp/web_clip.png" />
<link rel="apple-touch-icon-precomposed" href="https://rubydesign.jp/web_clip.png" />
<link rel="canonical" href="https://rubydesign.jp/">

<!-- *** stylesheet *** -->
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- *** javascript *** -->
<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- *** 追加javascript *** -->


<!-- ナビゲーションを個別に判定してアクティブ化するプラグイン -->
<script type="text/javascript">
$(document).ready(function() {
        $('nav li a').each(function() {
                var activeUrl = location.pathname.split("/")[1];　// 2階層目
                var $href = $(this).attr('href').split("/")[1];　// 2階層目
                if ($href == activeUrl ) {
                        $(this).addClass("active");
                }
        });
});
</script>

<!-- sp_header  -->
<script type="text/javascript">
  $(function() {
      var $header = $('body');
      // Nav Toggle Button
      $('.sp_hdr_button').click(function(){
          $header.toggleClass('open');
      });
  });
</script>
<!-- sp_header  -->

<!-- hreflangエラー修正 -->
<?php if( is_single() ): ?>
<?php if( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
<link rel="alternate" hreflang="ja" href="<?php the_permalink(); ?>">
<?php endwhile; ?>
<?php endif; ?>
<?php elseif( is_home() ): ?>
<link rel="alternate" hreflang="ja" href="<?php echo home_url(); ?>">
<?php endif; ?>
<!-- hreflangエラー修正 end -->

<script type="text/javascript">
$(function(){
   $(window).on('load',function(){
     $("#pageloading-icon").delay(1000).fadeOut('slow');
   });
   function loaderClose(){
     $("#pageloading-icon").fadeOut('slow');
   }
   setTimeout(loaderClose,10000);
});
</script>

<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('ruby-common.js', get_template_directory_uri() . '/js/common.js');
wp_head();
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-59196702-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-59196702-1');
</script>
</head>
<?php
//IDの設定
if ( is_front_page() ) {//フロントページが表示中
  $body_id = 'home';
} else if ( is_single('works') ) {//個別投稿のページを表示中
  $body_id = 'works_detail';
} else if ( is_single() ) {//個別投稿のページを表示中
  $body_id = 'blog_detail';
} else if ( is_page('service') ) {//個別の固定ページを表示中
  $body_id = 'service';
} else if ( is_page('works') ) {//個別の固定ページを表示中
  $body_id = 'works';
} else if ( is_page('price') ) {//個別の固定ページを表示中
  $body_id = 'price';
} else if ( is_page('price_all') ) {//個別の固定ページを表示中
  $body_id = 'price_all';
} else if ( is_page('about') ) {//個別の固定ページを表示中
  $body_id = 'about';
} else if ( is_page('contact') ) {//個別の固定ページを表示中
  $body_id = 'contact';
} else if ( is_page('thanks') ) {//個別の固定ページを表示中
  $body_id = 'thanks';
} else if ( is_page('privacy') ) {//個別の固定ページを表示中
  $body_id = 'privacy';
} else if ( is_category(works) ) {//カテゴリーのアーカイブを表示中
  $body_id = 'works';
} else if ( is_category(column) ) {//カテゴリーのアーカイブを表示中
  $body_id = 'column';
} else if ( is_category(blog) ) {//カテゴリーのアーカイブを表示中
  $body_id = 'blog';
} else if ( is_tag() ) {//投稿タグのアーカイブを表示中
  $body_id = 'archive';
} else if ( is_search() ) {//検索結果のページを表示中
  $body_id = 'serch';
} else if ( is_archive() ) {//投稿タグのアーカイブを表示中
  $body_id = 'archive';
}
if (isset($body_id)){
  $body_id = ' id="'.$body_id.'"';
}else{
  $body_id = NULL;
}
?>
<body <?php echo $body_id; ?>>

<!-- ヘッダー start -->
<div id="header"> 

<!-- ローディング start -->
  <div id="pageloading-wrap">
     <div id="pageloading-icon" class="loader-inner ball-scale">
          <div></div>
      </div>
  </div>
<!-- ローディング end -->
  
  <div class="sp_header">
  <div class="logo_area clear_fix">
    <h1 class="hdr_logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header/hdr_logo.svg" alt="RUBYDESIGN." width="150px" height="auto"><span></span></a></h1>
      <div class="hdr_copy">
       <nav>
        <ul class="nav">
          <li><a href="/about/"><span class="icn_about">事務所について</span></a></li>
          <li><a href="/works/"><span class="icn_works">制作実績</a></li>
          <li><a href="/magazine/" target="_blank"><span class="icn_media">メディア</a></li>
          <li><a href="/blog/"><span class="icn_blog">ブログ</a></li>          
          <li class="box_r"><a href="/contact/" target="_blank"><span class="icn_contact">ご依頼・ご相談</a></li>
        </ul>
      </nav>
      </div>
  </div>

  <!-- sp_hdr_menu -->
  <nav class="sp_hdr_menu">
    <ul class="sp_menu clear_fix">
      <li class="box_l"><a href="/about/">事務所について</a></li>
      <li class="box_r"><a href="/works/">制作実績</a></li>
      <li class="box_l"><a href="/magazine/" target="_blank">メディア</a></li>
      <li class="box_r"><a href="/blog/">ブログ</a></li>
      <li class="box_l"><a href="/contact/" target="_blank">依頼・相談</a></li>
    </ul> 
  </nav>
  <!-- sp_hdr_menu -->
  
  <div class="sp_hdr_button">
    <a href="#">
      <span class="sp_hdr_button_icon"></span>
      <p class="sp_hdr_button_txt"><span>Menu</span></p>
    </a>
  </div>
  <!-- /l-header__button -->

</div>
<!-- sp_header end -->

</div>
<!-- ヘッダー end -->

<?php if( !is_home() ): ?>
<div class="breadcrumbs">
<?php
// パンくずリストを表示
if ( function_exists( 'bcn_display' ) ) {
    bcn_display();
}
?>
</div>
<?php endif; ?>