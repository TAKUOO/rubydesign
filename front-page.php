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
                <a role="button" href="/blog" class="cv-button c-button-round flex">
                    <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/note@2x.svg"></span>
                    <span class="label">記事を読む</span>
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

</body>

<script>
    var swiper = new Swiper(".works-slider", {
        slidesPerView: 1,
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,
    });
</script>
</html>