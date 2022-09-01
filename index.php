<!doctype html>
<html lang="ja">

<?php get_header(); ?>
<?php include('contents_header.php'); ?>

<!-- メインビジュアル -->
<section id="mainVisual">
    <video id="background_video" src="<?php echo get_template_directory_uri(); ?>/img/rubydesign.mp4" webkit-playsinline playsinline autoplay loop muted></video>
    <div class="mainVisual_concept flex">
      <div class="concept_inner">
            <div class="passing move">
                <div class="passing-box">
                    <div class="passing-bar">
                        <div class="passing-txt">
                            <p class="mainVisual_inner_copy">WEBサービスを作る<br>会社のためのパートナー</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="passing move">
                <div class="passing-box">
                    <div class="passing-bar">
                        <div class="passing-txt">
                            <p class="mainVisual_inner_text"><span>サービスを開発したいのにできない環境がある。</span>アイディアがまとまらずリリースできていないなどの<span>技術的課題のパートナーとなりクリアにします。</span>プロダクト開発に必要な情報発信も積極的に行なっています。</p>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pickupNews"　class="ticker">
        <ul>
            <?php include('post_news.php'); ?>
        </ul>
        <p class="more_datail"><a href="/news">すべてを見る</a></p>
    </div>
</section>

<section id="workstyle">
    <div class="contents_Inner flex">
        <div class="text_Area">
            <h2>パートナーとして働く理由</h2>
            <p><span>WEBを取り巻く環境は、受託が一般的でした。</span>予算ありきの制作では線引きや双方の目的のズレが生まれてしまい、修正やバッファが嵩むとその度に、請求書をあげ稟議にかける必要があり、タイムロスが生じてしまいます。</p>
            <p>ですがWEBを通したサービスやコンテンツの発信は作ってからがスタートで、常にフィードバックと改善を行い向上する必要性があります。</p>
            <p>パートナーやメンバーとしてプロジェクトに携わる事で、必要なものを、必要な時に作る事が可能になり、素早い判断とアクションに繋がるスモールスタートを実現できます。</p>
        </div>
        <div class="image_Area">
            <img src="<?php echo get_template_directory_uri(); ?>/img/workstyle_image.svg" alt="">
        </div>
    </div>
</section>

<!-- サービス紹介 -->
<section id="projectArea">
    <div class="tab flex">
        <h2 class="flex">
            <span class="categrory_title">PROJECT</span>
            <span class="category_lead">実績</span>
        </h2>
        <span class="iconOpen flex_center"></span>
    </div>
    <div class="contents_Inner">
        <article class="card_smoll">
            <!-- <a href=""></a> -->
            <div class="eyecath">
                <img src="<?php echo get_template_directory_uri(); ?>/img/monobak_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">二次流通業界のコミュニケーションメディア</p>
                </div>
            </div>
        </article>
        <article class="card_smoll">
            <!-- <a href=""></a> -->
            <div class="eyecath">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mekiki_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">WEBで完結できる鑑定・査定サポートサービス</p>
                </div>
            </div>
        </article>
        <article class="card_smoll">
            <!-- <a href=""></a> -->
            <div class="eyecath">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teamAibod_opg.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">コミュニケーションした相手との関係をAIで可視化する</p>
                </div>
            </div>
        </article>
    </div>
</section>
<!-- サービス紹介 -->
<!-- <section id="projectArea">
    <div class="tab flex">
        <h2 class="flex">
            <span class="categrory_title">WORK STYLE</span>
            <span class="category_lead">特徴</span>
        </h2>
        <span class="iconOpen flex_center"></span>
    </div>
    <div class="contents_Inner">
        <article class="card_smoll">
            <a href=""></a>
            <div class="eyecath">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qooon_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">サービス設計</p>
                </div>
            </div>
        </article>
        <article class="card_smoll">
            <a href=""></a>
            <div class="eyecath">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qooon_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">サービスデザイン</p>
                </div>
            </div>
        </article>
        <article class="card_smoll">
            <a href=""></a>
            <div class="eyecath">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qooon_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">リーンな開発</p>
                </div>
            </div>
        </article>
    </div>
</section> -->

<!-- サービス紹介 -->
<!-- <section id="projectArea">
    <div class="tab flex">
        <h2 class="flex">
            <span class="categrory_title">SERVICE</span>
            <span class="category_lead">サービス</span>
        </h2>
        <span class="iconOpen flex_center"></span>
    </div>
    <div class="contents_Inner">
        <article class="card_smoll">
            <a href=""></a>
            <div class="eyecath">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qooon_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">サービス設計</p>
                </div>
            </div>
        </article>
        <article class="card_smoll">
            <a href=""></a>
            <div class="eyecath">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qooon_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">サービスデザイン</p>
                </div>
            </div>
        </article>
        <article class="card_smoll">
            <a href=""></a>
            <div class="eyecath">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qooon_ogp.jpg" alt="">
            </div>
            <div class="card_infoArea">
                <div class="card_infoArea_textArea">
                    <p class="text">リーンな開発</p>
                </div>
            </div>
        </article>
    </div>
</section> -->

<!-- ブログ -->
<section id="article_Area">
    <div class="tab flex">
        <h2 class="flex">
            <span class="categrory_title">OUT PUT</span>
            <span class="category_lead">情報発信</span>
        </h2>
        <span class="iconOpen flex_center"></span>
    </div>
    <div class="contents_Inner">       
        <div class="article_contents_Wrapper">
            <!-- ブログ記事エリア -->
            <div class="article_contents">
                <?php include('main-post.php'); ?>   
                <?php include('post.php'); ?>
                <div class="button">
                    <a href="/blog/">ブログ一覧へ</a>
                </div>
            </div>
            <!--　サイドエリア  -->
            <aside>
                <a href="https://saketuma.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/banner_saketuma.png" alt="SAKETUMAのバナー" loading="lazy" class="banner-image"></a>
                <?php dynamic_sidebar( 'widget_area01' ); ?>
	        </aside>
        </div>
    </div>
</section>

<section>
  <?php 
  // my_feed_display('https://note.mu/rubymade','6');
  ?>
</section>
<?php get_footer(); ?>

</body>
</html>