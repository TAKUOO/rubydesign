<?php
$body_id = "";

if (is_page()) {
    $body_id  = ' id="' . $post->post_name . '" ';
}

?>
<body <?php echo $body_id; ?> <?php body_class(); ?>>

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
                                    <li><a href="https://twitter.com/matui_takafumi"  target="_blank" ><i class="fab fa-twitter"></i>Twitter</a></li>
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
            <a href="<?php echo home_url(); ?>" class="flex"><img src="<?php echo get_template_directory_uri(); ?>/img/ruby_icon.png" alt="RUBYDESIGN" width="32px" class="header_logo__icon"><span class="header_logo__name">RUBYDESIGN.</span></a>
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

<?php if( !is_front_page() ): ?>
    <div class="breadcrumbs">
    <?php
    // パンくずリストを表示
    if ( function_exists( 'bcn_display' ) ) {
        bcn_display();
    }
    ?>
    </div>
<?php endif; ?>