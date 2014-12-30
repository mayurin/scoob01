<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'scoob');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'scoob00scoob');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
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
define('AUTH_KEY',         '0h^F|K]W0N)_uB|AagrU;nxUXQ!ep,-o(HgNHrQY)37X$V2Kva!b`+P3/f9#6D^3');
define('SECURE_AUTH_KEY',  'xldsdVpcu!tH#vQfdqtdf &A<g>0#Vt+0!.5R(nX_:jgz.@V,hj}c*d1_6{Mhj=o');
define('LOGGED_IN_KEY',    '0wVa$l$T&q+Mi!DR/{:57-]D.M:Wd%RrMkg.35{K;PpcT@SbEpo3r(o+/wIAy(@;');
define('NONCE_KEY',        'i S%NAOp@3F^)p$dkA?Dyb~b3Jc?-^q0?Le;<2&:RqQWzw;} c0jF#^ja/v}OAn]');
define('AUTH_SALT',        ' :U0v+Q)[T*E&7#=-%gO JB]1yg|_xF5^Axc(p_&5InE9J~eJg6]LUCY*R+:$I[H');
define('SECURE_AUTH_SALT', '(.#~x#T:]G5ELoyI]h|S?xcou&PApWZj3+k<?ZOm}a>.<3e_-2u:Yqo`$Gq3qjPR');
define('LOGGED_IN_SALT',   'aWm;tLoTLL8|X{:+^UDPo]FHZ0?b.VH:H x[vu9.9(DWsG_:+J)tk+AE W5PZ!]e');
define('NONCE_SALT',       'J0n-S2w9_VGo80u7r!iRd4Oiq`hspV=a|pQ;U6zbH$:~Xm-.[${d:7;,|i9(C@dM');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WP_SITEURL', 'http://scoob.info/scoob');
define('WP_HOME', 'http://scoob.info/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');