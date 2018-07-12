<?php
// 新着情報CMS
require_once '../admin/model/news/display.php';
$newsCms = new newsDisplay();
$detailHtml = $newsCms->getDetailHtml('./news/details.tpl');
$cateHtml = $newsCms->getCategoryArchiveHtml('./news/category.tpl');
$monthHtml = $newsCms->getDateArchiveHtml('./news/month.tpl');
$title = $newsCms->getTitle();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>新着情報 | 福岡 ブランディングデザイン事務所 | RUBYDESIGN. (ルビーデザイン)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="福岡,デザイン事務所,ブランディング,グラフィックデザイン,WEBデザイン・商品企画・開発,運営"/>
<meta name="description" content="RUBY DESIGN.（ルビーデザイン）は企業や事業のブランド構築を専門とする福岡のデザイン事務所です。" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<link rel="index" href="../rubydesign.jp/index.php" />
<link rel="shortcut icon" href="../rubydesign.jp/favicon.ico" />
<link rel="apple-touch-icon" href="../rubydesign.jp/apple-touch-icon.png" />
<link rel="canonical" href="http://rubydesign.jp">
<!-- *** stylesheet *** -->
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all" />

<!-- *** stylesheet 追加 *** -->
<link href="../css/news.css" rel="stylesheet" type="text/css" media="all" />

<!-- *** javascript *** -->
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/footerFixed.js"></script>
<script type="text/javascript" src="../js/jMenu.jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>

<!-- *** 追加javascript *** -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://rubydesign.jp/js/analytics_ruby.js"></script>

<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
  $("#header").load("../common/header.html");
});
</script>
</head>

<body id="news">
<div id="header"></div>

<div class="con_wrap">
  <section id="con_blog_l">
  <?php echo $detailHtml ?>
  </section> 
<section id="con_blog_r">
  <div class="con_category">
    <h3>カテゴリー<br/><span class="s">Category</span></h3></li>
    <ul>
      <li class="box_st_ttl"></li>
<?php echo $cateHtml ?>
    </ul>
  </div>
  <?php echo $monthHtml ?>
</section> 
</div><!-- con_wrap -->

<section id="contact_box">
     <h2>お問合せ<br/><span class="s">Contact</span></h2>
     <p>ご相談やご質問はこちらからお問合せください。随時パートナーも募集しています。</p> 
     <div class="txt_mail"><a href="mailto:thankyou@rubydesign.jp">thankyou@rubydesign.jp</a></div>
  </section>

<section id="footer">
  <p class="txt_sns">
    公式snsアカウントでも随時情報をお届けしています！<br/>ぜひチェックしてみてください。
  </p>

  <ul class="box_sns">
    <li><a href="https://www.facebook.com/pg/RUBY-DESIGN-276841105839928/about/" target="_blank"><img src="../img/common/fb.png" alt="facebook" width="33" height="33"></a></li>
    <li><a href="https://www.instagram.com/ruby._matsui/" target="_blank"><img src="../img/common/insta.png" alt="instagram" width="33" height="33"></a></li>
    <li><a href="#" target="_blank"><img src="../img/common/pintarest.png" alt="pintarest" width="33" height="33"></a></li>
  </ul>

  <h6><a href="/"><img src="../img/common/ftr_logo.png" alt='経営を共に支えるデザイン RUBYDESIGN.（ルビーデザイン） BNRADING DESIGN OFFICE' width="220" height="57.5"></a></h6>
  
</section>
<p class="txt_copyright">
    Copyright &copy;
    <script type="text/javascript">document.write(new Date().getFullYear());</script>
    <a href="http://rubydesign.jp/" target="blank">RUBYDESIGN</a>. All rights reserved.
</p>
<!-- #EndLibraryItem --><!-- JS 追加 -->
</body>
</html>