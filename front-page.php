<!doctype html>
<html lang="ja">

<?php get_header(); ?>
<?php include('contents_header.php'); ?>

<!-- メインビジュアル -->
<section id="mainVisual" class="main-visual">
    <div class="main-visual_inner flex">
        <div class="main-visual_head">
            <?php get_template_part('template-parts/works-slider'); ?>
        </div>
        <div class="main-visual_body">
            <h1>ITを支える外部チームが<br/>サービスの課題を圧倒的に改善</h1>
            <div class="main-visual_desc">
                <p>企業の外部チームとしてデジタル領域のUXUI改善運用/webシステム開発を提供します。</p>
                <p>10年以上受託をしてきた結果、Webやシステムを導入する場合、デザイナーやエンジニアを外部チームとして持っている企業は事業成長も早く、小回りも効きやすい特徴があります。</p>
                <p>外部チームを持てば、依頼の度に時間の掛かる事業・サービス理解もショートカットできます。</p>
            </div>
            <div class="cv-buttons flex">
                <a role="button" href="/about#project" class="cv-button c-button-round flex">
                    <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/note@2x.svg"></span>
                    <span class="label">実績をみる</span>
                </a>
                <a role="button" href="/contact" class="cv-button c-button-round flex">
                    <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/mail@2x1.svg"></span>
                    <span class="label">相談する</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="top-service" class="top-service">
    <h2 class="content-title">
        <span class="en">SERVICE</span>
        <span class="jp">サービス</span>
    </h2>
    <h3>月額定額制の顧問スタイル</h3>
    <div class="top-service__content p-content-card">
        <h4>
            <span class="u-color__gray top-service__lead">仕様を決めるのが難しい、事業理解やサービス理解に時間かかる、仕様変更が難しい</span>
            <span class="top-service__copy">納品が引き起こすあらゆる課題を解決し<span>IT活用による事業の成長を支えます。</span></span>
        </h4>
        <p class="top-service__desc">「納品して終わり」ではなく、新しくサービスを立ち上げたい、問題点から一緒に解決案を考えてほしい、作りながら考えたい、意見をもらいたい、などお客様のパートナーとしてデザインからシステムまでをワンストップで提供できることがRUBYDESIGN.の強みです。</p>
        <a href="/service" class="top-service__button call-to-action__button no-border --red">サービスをみる</a>
    </div>
</section>


<section id="top-user-voice" class="top-user-voice">
    <h2 class="content-title">
        <span class="en">USER VOICE</span>
        <span class="jp">パートナー企業様からのコメント</span>
    </h2>
    <div class="p-content-cards swiper">
        <div class="swiper-wrapper">
            <div class="p-content-card user-voice-item swiper-slide">
                <div class="user-voice-item__head flex">
                    <span class="user-voice-item__avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/avatar/irie_shingo.jpg" alt="入江慎吾" loading="lazy"></span>
                    <div class="user-voice-item__name">
                        <b class="company-name">MENTA株式会社</b>
                        <p class="name">代表取締役社長 入江 慎吾</p>
                    </div>
                </div>
                <div class="user-voice-item__body">
                    <p>松井さんとは数年一緒に仕事をしていますが、単なる職種としてのデザイナーではくくれない方です。ビジネス思考を持ち、必要ならプログラミングもやってしまう。利用者であるユーザーが求めていることを知り、一緒に対話しながら解決策を考えていく。あくまでもその手段がデザインであるという考えです。逆に言えば、決まった仕様や内容をデザインするだけでは松井さんにお願いするのはもったいないなと思います。一緒に信頼してビジネスができるパートナーです。</p>
                </div>
            </div>
            <div class="p-content-card user-voice-item swiper-slide">
                <div class="user-voice-item__head flex">
                    <span class="user-voice-item__avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/avatar/yoshimura_tomohiro.jpg" alt="吉村知宏" loading="lazy"></span>
                    <div class="user-voice-item__name">
                        <b class="company-name">株式会社MONOBANK</b>
                        <p class="name">鑑定士 吉村知宏</p>
                    </div>
                </div>
                <div class="user-voice-item__body">
                    <p>松井さんは数年弊社のデザイナーとして仕事をしてくれてます。
                        私自身、WEBについて知識の疎い部分があるのですがそんな私にも分かりやすい言葉で説明してくれ、大変助かっています。
                        実際のお仕事も見た目のデザインだけではなく、対話の中でこちらの意図をくみ取り集客までのデザインも構築してくれます。
                        まさにプロの仕事をしてくれるかけがえのないパートナーだと思っています。
                    </p>
                </div>
            </div>
            <div class="p-content-card user-voice-item swiper-slide">
                <div class="user-voice-item__head flex">
                    <span class="user-voice-item__avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/avatar/suefuji_wakako.jpg" alt="末藤 和佳子" loading="lazy"></span>
                    <div class="user-voice-item__name">
                        <b class="company-name">ご一緒したメンバーの声</b>
                        <p class="name">UXデザイナー 末藤 和佳子</p>
                    </div>
                </div>
                <div class="user-voice-item__body">
                    <p>ビジネス面での課題をお持ちのクライアント案件で真っ先にお声かけするのが松井さんです。
                        これまで、いくつかのプロジェクトでご一緒させて頂きましたが、ビジネス、クリエイティブ、テクノロジーと多方面に明るく、まさにBTC人材であると感じております。
                        また、ご自身でもプロダクトを開発しサービス化されている為、顧客視点とマーケット視点とをバランス良く持たれており提案のアウトカムも顧客満足度の高いものとなっています。
                        今後、益々活動の領域を広げられると期待しています。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ブログ -->
<section id="article_Area">

    <h2 class="content-title">
        <span class="en">OUT PUT</span>
        <span class="jp">情報発信</span>
    </h2>

    <div class="contents_Inner">

        <div class="article_contents_Wrapper">
            <!-- ブログ記事エリア -->
            <div class="p-article-cards">
                <?php include('main-post.php'); ?>
                <?php include('post.php'); ?>
                <div class="button">
                    <a href="/blog/">ブログ一覧へ</a>
                </div>
            </div>
            <!--　サイドエリア  -->
            <?php get_sidebar(); ?>
        </div>
    </div>

</section>

<?php get_footer(); ?>

<script>
    const mySwiper = new Swiper(".swiper", {
        slidesPerView: 1,
        spaceBetween: 32,
        loop: true,
        loopAdditionalSlides: 1,
        speed: 1500,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        grabCursor: true,
        watchSlidesProgress: true,
    });
</script>

</body>

</html>