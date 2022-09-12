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

<!--<div id="pickupNews"　class="ticker">-->
<!--    <ul>-->
<!--        --><?php //include('post_news.php'); ?>
<!--    </ul>-->
<!--    <p class="more_datail"><a href="/news">すべてを見る</a></p>-->
<!--</div>-->

<!--<section id="workstyle">-->
<!--    <div class="contents_Inner flex">-->
<!--        <div class="text_Area">-->
<!--            <h2>パートナーとして働く理由</h2>-->
<!--            <p><span>WEBを取り巻く環境は、受託が一般的でした。</span>予算ありきの制作では線引きや双方の目的のズレが生まれてしまい、修正やバッファが嵩むとその度に、請求書をあげ稟議にかける必要があり、タイムロスが生じてしまいます。</p>-->
<!--            <p>ですがWEBを通したサービスやコンテンツの発信は作ってからがスタートで、常にフィードバックと改善を行い向上する必要性があります。</p>-->
<!--            <p>パートナーやメンバーとしてプロジェクトに携わる事で、必要なものを、必要な時に作る事が可能になり、素早い判断とアクションに繋がるスモールスタートを実現できます。</p>-->
<!--        </div>-->
<!--        <div class="image_Area">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/workstyle_image.svg" alt="">-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- サービス紹介 -->
<!--<section id="projectArea">-->
<!--    <h2 class="content-title flex">-->
<!--        <span class="en">PROJECT</span>-->
<!--        <span class="jp">実績</span>-->
<!--    </h2>-->
<!--    <div class="contents_Inner">-->
<!--        <article class="card_smoll">-->
<!--            <div class="eyecath">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/monobak_ogp.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="card_infoArea">-->
<!--                <div class="card_infoArea_textArea">-->
<!--                    <p class="text">二次流通業界のコミュニケーションメディア</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->
<!--        <article class="card_smoll">-->
<!--            <div class="eyecath">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/mekiki_ogp.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="card_infoArea">-->
<!--                <div class="card_infoArea_textArea">-->
<!--                    <p class="text">WEBで完結できる鑑定・査定サポートサービス</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->
<!--        <article class="card_smoll">-->
<!--            <div class="eyecath">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/teamAibod_opg.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="card_infoArea">-->
<!--                <div class="card_infoArea_textArea">-->
<!--                    <p class="text">コミュニケーションした相手との関係をAIで可視化する</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->
<!--    </div>-->
<!--</section>-->

<!-- ブログ -->
<section id="article_Area">

    <h2 class="content-title flex">
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