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
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'f0_L3/?cdE$;NnL,%?72(6JB+b$e`O!uE+xP$g#x`I^~JiUUR)ZTRaG}}e-IrIoy');
define('SECURE_AUTH_KEY',  'N<V.OLXstX]T+wZ!LU.`c>F>hWH^z-gB}Y`3@wbf|_<zuz3m+=i.GC;,Itry{6n?');
define('LOGGED_IN_KEY',    '/=qKpZxP7sfnZ{/3(/-u7W7m^3{EZ4d]1x80m]69E=_Fk_TV-r|[n}?|2]v054v6');
define('NONCE_KEY',        'OOa!r9o_JT@1(9rNseF*,KDdgW9mIix=Qwmv3zMlJPhbEG48/Ix;JXy$bk7sD:$<');
define('AUTH_SALT',        '/b?I|WJKG+9il|0enJ):NogvAC=2Z_buOiM-75OjmqR>5/&Y!9{Aj%(;.M3<?bke');
define('SECURE_AUTH_SALT', 'gKZ h@AS1Y9N~:{^`:C2yPKuAJ2-V:!GpdlO-r!$65$T5Ib/nQ7Z@VhhT> dxrNi');
define('LOGGED_IN_SALT',   '@{N6S{f6h7ot26%+1VVCOFR;+*ZyJdVhhAnEwn<9l_z2]R!QY._GtW@pZi@)A/2c');
define('NONCE_SALT',       'K8nJ7K2G3B_EFR-#bp?0e&5@sF<-P{OR2%boaIHL7JuwX$S4cB1QO*+L*J;(m/$j');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

