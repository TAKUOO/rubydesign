<?php
/*
Template Name: 私について
Template Post Type: page
*/
?>

<!doctype html>
<html>
<?php get_header(); ?>
<?php include('contents_header.php'); ?>
<main role="main">
    <div class="contents_Inner">
        <section id="profile" class="contents profile">
            <h1>プロフィール</h1>
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/img/img_profile.jpg" alt="松井貴史のプロフィール写真" loading="lazy" class="profile_img">
            </picture>
            <h2 class="profile_name"><a href="https://twitter.com/matui_takafumi" target="_blank" rel="noopener">松井 貴史 / TAKAFUMI MATSUI</a></h2>
            <p>1984年 熊本出身。旅館・ホテル専門の制作会社のWEB制作チームを経て2014年に独立し、フリーランスとしてのキャリアをスタート。顧問・パートナー型の受託専門WEBデザイナー兼ディベロッパーとしてUXUI改善運用からWEBシステム開発までワンストップで提供しています。</p>
        </section>

        <section id="infomation" class="contents">
            <h2>概要</h2>
            <table>
                <tbody>
                <tr>
                    <th>屋号</th>
                    <td>RUBYDESIGN.（ルビーデザイン）</td>
                </tr>
                <tr>
                    <th>代表者</th>
                    <td>松井　貴史（Takafumi Matsui）</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒814-0004　福岡市早良区曙1丁目5-2</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td>お問い合わせやご相談は<a href="../conact/">メールフォーム</a>からお願いします。</td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>webサービスのプランニング・デザイン・開発・実装<br>自社プロダクト・WEBサービスの企画・運営
                    </td>
                </tr>
                </tbody>
            </table>
        </section>

        <section id="project" class="contents">
            <h2>実績 | パートナー企業様</h2>
            <div class="p-work-item work-item contents_block flex">
                <div class="p-work-item__text">
                    <h4><a href="https://menta.work/" target="_blank" rel="noopener">MENTA株式会社</a></h4>
                    <em>BtoC,2020/10月〜2022/8月</em>
                    <p>いろんなプロに相談できるN0.1メンターサービス。デザイナーとして参画。サービスサイトの仕様検討からフロントのデザイン実装などデザインに関わる全ての領域を横断的に携わる。</p>
                </div>
                <picture class="p-work-item__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/menta_s.jpg" alt="MENTA株式会社" loading="lazy">
                </picture>
            </div>
            <div class="p-work-item work-item contents_block flex">
                <div class="p-work-item__text">
                    <h4><a href="https://novasto.co.jp/" target="_blank" rel="noopener">株式会社NOVASTO</a></h4>
                    <em>BtoB,2021/4月〜</em>
                    <p>リユース × ITを軸にシステム開発事業・コンサルティング事業・マーケットプレイス運営事業の3つの事業を展開するIT企業。次世代クラウドPOSシステム｜ReCORE (リコア)のプロダクトの業務システムのUX/UIをはじめ、サービスサイトなどの実装に携わる。</p>
                </div>
                <picture class="p-work-item__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/novasto_s.jpg" alt="株式会社NOVASTOの画像" loading="lazy">
                </picture>
            </div>
            <div class="p-work-item work-item contents_block flex">
                <div class="p-work-item__text">
                    <h4><a href="https://monobank.jp/" target="_blank" rel="noopener">株式会社ものばんく</a></h4>
                    <em>BtoB,2019/10月〜</em>
                    <p>60年以上の伝統あるモノの銀行 monobankグループ。下関に本社を構えイノーベーションを起こし続ける企業にデザイナとして参加。オウンドメディア及びコーポレイトサイトなどの、ブランドイメージやマーケティングに関わるデザインを担当。</p>
                </div>
                <picture class="p-work-item__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/monobank_s.jpg" alt="株式会社monobankの画像" loading="lazy">
                </picture>
            </div>
            <div class="p-work-item work-item contents_block flex">
                <div class="p-work-item__text">
                    <h4><a href="https://www.mekiki.ai/" target="_blank" rel="noopener">株式会社MEKIKI</a></h4>
                    <em>BtoB,2018/10月〜</em>
                    <p>鑑定士×AIを軸としたスタートアップ。UIデザイン、WEBサイト、改善案等、プロジェクトメンバーとして参加。</p>
                </div>
                <picture class="p-work-item__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/mekiki_s.jpg" alt="株式会社MEKIKIの画像" loading="lazy">
                </picture>
            </div>
            <div class="p-work-item work-item contents_block flex">
                <div class="p-work-item__text">
                    <h4><a href="https://aibod.com/index.php/our-offers/our-products/strataLink" target="_blank" rel="noopener">MyReco</a></h4>
                    <em>BtoB,2018/12月〜2019/9月</em>
                    <p>AI技術を専門的に扱う企業TeamAibod。AIによる自社プロダクト、StrataLink/Myrecoプロジェクトのデザイナーとして参加。デザインとフロントまでを実装。</p>
                </div>
                <picture class="p-work-item__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/myreco_s.jpg" alt="myrecoの画像" loading="lazy">
                </picture>
            </div>
            <div class="p-work-item work-item contents_block flex">
                <div class="p-work-item__text">
                    <h4><a href="https://bebimatch.com/" target="_blank" rel="noopener">ベビmatch</a></h4>
                    <em>BtoC,2018/9月〜2019/8月 サービス終了</em>
                    <p>不妊時の心理的な課題を解決するWEBサービスのプロジェクトに参加。不妊時の状態管理・パートナーとの共有などを行えるツールの提供。</p>
                </div>
                <picture class="p-work-item__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/bebimatch_s.jpg" alt="ベビmatchの画像" loading="lazy">
                </picture>
            </div>
        </section>

        <section id="product" class="contents">
            <h2>自社サービス</h2>
            <div class="contents_block">
                <h4>SAKETUMA</h4>
                <em>リリース：2022/4月</em>
                <em>技術：Laravel,Docker</em>
                <p>SAKETUMAはオンライン飲みの場で大活躍するオンラインのボードゲームです。使い方はカンタン！お題を作成して作成したルーレットを画面共有、あとはルーレットを回すだけ！</p>
            </div>
            <div class="contents_block">
                <h4>TimePanel</h4>
                <em>リリース：2020/1月</em>
                <em>技術：GAS,Laravel,vue.js</em>
                <p>Slackから勤怠管理や自己管理ができてWEB上で編集ができるツール。</p>
            </div>
            <div class="contents_block">
                <h4>MONOCREW</h4>
                <em>リリース：2019/3月</em>
                <em>技術：Laravel,Docker</em>
                <p>monocrewは、SNSで探しモノを簡単に見つけることができるマッチングサービス。</p>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>

