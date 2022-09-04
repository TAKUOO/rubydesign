<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php if(is_home()): ?>
    <title><?php bloginfo('name'); ?></title>
    <?php else: ?>
    <title><?php wp_title(' - ',true,'right'); ?></title>
    <?php endif; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta name="google-site-verification" content="r3ej5W3S5B-VlOkykzenzjQ0zdwuDwr4zw2wepMZYDY" />
    <meta http-equiv="content-style-type" content="text/css" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <link rel="index" href="<?php echo esc_url(home_url('/')); ?>">
    <?php
        $http = (is_ssl() ? 'https' : 'http') . '://';
        $url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    ?>
    <link rel="canonical" href="<?php echo esc_url($url); ?>">


     <!-- favicon設定 -->
    <meta name="msapplication-square70x70logo" content="/favicons/site-tile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/favicons/site-tile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/favicons/site-tile-310x150.png">
    <meta name="msapplication-square310x310logo" content="/favicons/site-tile-310x310.png">
    <meta name="msapplication-TileColor" content="#0078d7">
    <link rel="shortcut icon" type="/favicons/vnd.microsoft.icon" href="/favicons/favicon.ico">
    <link rel="icon" type="/favicons/vnd.microsoft.icon" href="/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36" href="/favicons/android-chrome-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/favicons/android-chrome-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="/favicons/android-chrome-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/android-chrome-96x96.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/favicons/android-chrome-128x128.png">
    <link rel="icon" type="image/png" sizes="144x144" href="/favicons/android-chrome-144x144.png">
    <link rel="icon" type="image/png" sizes="152x152" href="/favicons/android-chrome-152x152.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="256x256" href="/favicons/android-chrome-256x256.png">
    <link rel="icon" type="image/png" sizes="384x384" href="/favicons/android-chrome-384x384.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="36x36" href="/favicons/icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/favicons/icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="/favicons/icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/icon-96x96.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/favicons/icon-128x128.png">
    <link rel="icon" type="image/png" sizes="144x144" href="/favicons/icon-144x144.png">
    <link rel="icon" type="image/png" sizes="152x152" href="/favicons/icon-152x152.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/favicons/icon-160x160.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/icon-192x192.png">
    <link rel="icon" type="image/png" sizes="196x196" href="/favicons/icon-196x196.png">
    <link rel="icon" type="image/png" sizes="256x256" href="/favicons/icon-256x256.png">
    <link rel="icon" type="image/png" sizes="384x384" href="/favicons/icon-384x384.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicons/icon-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/icon-16x16.png">
    <link rel="icon" type="image/png" sizes="24x24" href="/favicons/icon-24x24.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/icon-32x32.png">
    <link rel="manifest" href="/manifest.json">
 
     <!-- グーフルフォント追加 -->
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet">
     <!-- *** stylesheet *** -->
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="all">
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.simpleTicker.css" media="all">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
          
    <!-- *** fontawosme 設定 *** -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- *** javascript *** -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>
     <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.simpleTicker.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/main_orignal.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NF77F740FP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-NF77F740FP');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120850185-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-120850185-1');
    </script>

    <!-- Google Adsence -->
	<script data-ad-client="ca-pub-4554513594071722" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    </head>
    
 <?php wp_head(); ?>

