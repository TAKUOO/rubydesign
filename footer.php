<footer>
    <section id="contactArea" class="secondaryBackGroundColor">
        <a href="/contact"></a>
        <div class="tab flex">
            <h2 class="flex">
                <span class="categrory_title">CONTACT</span>
                <span class="category_lead">お問い合わせ・ご相談</span>
            </h2>
            <span class="iconArrow flex_center"></span>
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
    <script>
    $('.slick').slick({
        autoplay: true,
        infinite: true,
        // slidesToScroll: 3,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        arrows: false,
    });
    </script>
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
        $(function(){
            $.simpleTicker($("#pickupNews"),{'effectType':'roll'});
        });
    </script>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = 'https://rubydesign.jp/contact/thanks';
        }, false );
    </script>

<?php wp_footer(); ?>