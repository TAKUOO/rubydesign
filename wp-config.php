<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0494160-5qtnab');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0494160');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'WUFYK9lY');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql112.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'IMy7*)R(DDeetsd<h;2xBA#*2a_i5:P1}RJbvicjK1&5EF<fx%xXDSU2i3[,kB7%');
define('SECURE_AUTH_KEY', '")`21]M["J8X,Gg"F{}Gs{8Zi8c!wKdC_jozYsxS2eQgKEmR!N/v~o^Uyi7A+GOF');
define('LOGGED_IN_KEY', 'w!h(*$=%09A)Ed!sy%-1au0^HR5{W).H}H}V8k#fZ9wv)st:5MYFRw2vn)U[ei;R');
define('NONCE_KEY', '4hTMmZ$pw?.]P`w9=]TnI+?=Nw5~GM:=vxDK}+3$=TT+`,!zP:!Gcf%U*]^83`2k');
define('AUTH_SALT', '*rLgf}w2j?7&aAYFF`k.>b:&CT9o>y<3>+w4T>&I!/Nb4]a/:Imc41!#*=Jpm:nb');
define('SECURE_AUTH_SALT', 'ncUY>xW!Cm:wvK`F7a.B/ipq=m1$D[?i6Vj;yU{j}/RNYYCS3QO1JpR[5"_xwDi(');
define('LOGGED_IN_SALT', 'D6_OGSe?;k*rJ?m)!b$)I{ff(F$}S2;YOZjyMD"cI"_o~D;$D1|(!s>f4@cs^]#I');
define('NONCE_SALT', '}%+y:9f*a3=@U~"(j}TSk?J[J(aqKNy;6JpwWn&1c[L46xa^y<Y_3CjV5n*j.$tw');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp4_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

// マルチサイト設置設定
define ('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'rubydesign.jp');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
