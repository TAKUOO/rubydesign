<footer>
    <section class="call-to-action u-color-gradient__blue flex" id="call-to-action">
        <div class="call-to-action__inner">
            <h3 class="call-to-action__copy">RUBYDESIGN.は<span>顧問・パートナーとしての運用実績があります。</span>詳しくはお問い合わせください。</h3>
            <p class="call-to-action__text">新規サービス、社内業務システム開発、デザイン・開発会社向け受託案件サポート、WEBコンサルなど御社の求められることに柔軟に対応いたします。 </p>
            <dl class="use-case">
                <dt class="use-case__label">利用ケース</dt>
                <dd class="use-case__text">新しくサービスを立ち上げたい、問題点から一緒に解決案を考えてほしい、作りながら考えたい、意見をもらいたい</dd>
            </dl>
            <div class="call-to-action__buttons flex">
                <a href="/contact" class="call-to-action__button">お問合せ・相談する</a>
                <a href="/service" class="call-to-action__button no-border --red">サービスをみる</a>
            </div>
        </div>
    </section>

    <div class="sitemap flex">
        <nav>
            <?php
            $arg = array(
                'menu' => 'footer-navigation',
                'menu_class' => 'flex',
                'container' => false,
                );
                wp_nav_menu($arg);
            ?>
        </nav>
        <div class="snsArea">
            <ul class="flex">
                <li><a href="https://twitter.com/matui_takafumi" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/RUBY-DESIGN-276841105839928/"　target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <!-- <li><a href="#"><i class="fas fa-rss"></i></a></li> -->
            </ul>
        </div>
        <p class="copyright">&copy;&thinsp;RUBY&nbsp;DESIGN.</p>
    </div>
</footer>
    <script type="text/javascript">
    $(function () {
        $('.tab').click(function () {
            if ($(this).next().is(':hidden')) {
                $(this).next().slideDown();
                $(this).addClass('close');
            } else {
                $(this).next().slideUp();
                $(this).removeClass('close');
            }
        });
    });
    </script>
    <script type="text/javascript">
        $(function() {
            var $header = $('body');
            $('.navi_buttonArea').click(function(){
                $header.toggleClass('open');
            });
        });
    </script>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = 'https://rubydesign.jp/contact/thanks';
        }, false );
    </script>

<?php wp_footer(); ?>