<body <?php body_class(); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
<!-- facebook ogp設定 -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '529338887542979',
      xfbml      : true,
      version    : 'v6.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!-- ヘッダー -->
<header>
    <div class="header_inner flex">
        <div class="gloval_navigation">
            <div class="gloval_navigation_contents">
                
                <section id="navi_header">
                    <div class="navi_buttonArea">
                        <div class="navi_icon"></div>
                    </div> 
                </section>

                <div class="menuOpen_contents">
                    <!-- メニュー -->
                    <section id="menuArea" class="menuOpen_contents_container">
                       
                        <div id="search_sp">
                            <h3>サイト内検索</h3>
                            <?php get_search_form(); ?>
                        </div>

                        <div id="navi_menu">
                            <h3>メニュー</h3>
                            <div class="contents_wrap">
                                <nav>
                                <?php
                                    $arg = array(
                                        'menu' => 'global-navigation',
                                        'menu_class' => 'flex',
                                        'container' => false,
                                        );
                                        wp_nav_menu($arg);
                                    ?>
                                </nav>
                                <a href="<?php echo home_url(); ?>/contact" class="button">お問い合わせ</a>
                            </div>
                        </div>
                        <div id="navi_socialArea">
                            <h3>ソーシャル</h3>
                            <div class="contents_wrap">
                                <ul>
                                    <li><a href="https://www.facebook.com/RUBY-DESIGN-276841105839928/" target="_blank"><i class="fab fa-facebook-f"></i>facebook</a></i></li>
                                    <li><a href="https://twitter.com/matui_takafumi"  target="_blank" ><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <!-- <li><a href="#" class="flex_center"><i class="fas fa-rss"></i>RSS</a></li> -->
                                    </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!-- ナビボタン -->
            <div class="navi_buttonArea">
                <div class="navi_icon"></div>
            </div>
        </div>
        
        <div class="header_logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/headr_logo.svg" alt="RUBYDESIGN" width="180px"></a>
        </div>
        <div class="navigation_inner flex">
            <nav>
                <?php
                    $arg = array(
                        'menu' => 'global-navigation',
                        'menu_class' => 'flex',
                        'container' => false,
                        );
                        wp_nav_menu($arg);
                    ?>
            </nav>
            <div class="sub_navgation flex">
                <?php get_search_form(); ?>
                <a role="button" href="/contact" class="cv-button c-button-round flex">
                    <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/mail@2x1.svg"></span>
                    <span class="label">相談する</span>
                </a>
            </div>
        </div>
    </div>
</header>

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