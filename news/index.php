<?php
// 新着情報CMS
require_once '../admin/model/news/display.php';
$newsCms = new newsDisplay();
$listHtml = $newsCms->getListHtml('./news/list.tpl');
$cateHtml = $newsCms->getCategoryArchiveHtml('./news/category.tpl');
$monthHtml = $newsCms->getDateArchiveHtml('./news/month.tpl');
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
<script type="text/javascript" src="../js/jquery-ui.js"></script>

<!-- *** 追加javascript *** -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://rubydesign.jp/js/analytics_ruby.js"></script>
<!-- <script type="text/javascript" src="../js/heightLine.js"></script> -->
<script type="text/javascript" src="../js/jMenu.jquery.min.js"></script>

<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
</head>

<body id="news">
<h1><a href="../"><img src="../img/logo_ruby.png" alt="RUBYDSIGN."></a></h1>

<div id="weblog">
  <h2>News</h2>
  <ul class="clear_fix heightLineParent">
    <?php echo $listHtml ?>
  </ul>
  </div><!--box_weblog -->


  <p class="txt_copyright">
    Copyright &copy;
    <script type="text/javascript">document.write(new Date().getFullYear());</script>
    <a href="http://rubydesign.jp/" target="blank">RUBYDESIGN</a>. All rights reserved.
  </p>
</div>
  </article>
<!-- #EndLibraryItem --><!-- JS 追加 -->
<script type="text/javascript">
$(function(){
	$(document).on('click', 'div.box_btn_and a', function(){
		url = $(this).attr('rel');
		$.ajax({
			type: "get",
			url: url,
			success: function(res){
				$('div.box_btn_and a').remove();
				$('section#con_blog_l').append(res);
			}
		})
	});
});
</script>
</body>
</html>