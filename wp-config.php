<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache




/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jo_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ME784456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'WYHMzdci@<)HG>zH|s_fSA$/P-_[u+&x)tNfrfUyhfQdEuxCr*HyH_K>FYdUrPHwn<sxpu+j=nKrUOQ-APwF^TS%_oDM_g_)?vIqY}r+Az_&|)|HZV?-vJ-mYz%_QmZO');
define('SECURE_AUTH_KEY', 'KL*}Q)S%CNe&YsS+kKG_<clZsy*shvMY|unNCvdeLiP%bPJ;WlGLb]jkM<g>d<h]TYoi]M/&FAT%f*n}QsfY|-P<;n](jVJr[)qUo)v-;!p[U[QqwJ$e$[Zi-;YLvrU!');
define('LOGGED_IN_KEY', 'yw+hK-ww+p=w%(k}BqR}-vzrk]v//wi!DMKYN]vo=UslwiH)kS]BgU&h(qOf)$j&{Jds{thwiID@Oc_hqaP>UUF@k;vFwA@oFXByw|[I;]u{YFvF<AE)K<lrehhU%mg(');
define('NONCE_KEY', 'I>uM*WbukKPddQvfitB!&fX[(s$[FA&w>G=U(]TlKwOxESQfAE_{)RJpz-NY>fX/|zqvSCRdm?(TynA&wdRcwNYwVvx=iqm=QcNuPrLZQiLg(;(%FZg_(&xqUa)P-Svn');
define('AUTH_SALT', 'eAsSIGN)rbhI+zlTiE>e$e@b;K]O*@/tD;P&*lAPNZDTxoon)gYq|q?fei+dnkMfk&pKaSMgDpK}gw{tjrZt$z]p(vlhaLk^=BOE?hpg+QCc%@pns$Qdit&@!bnE-Zzf');
define('SECURE_AUTH_SALT', 'qdQMxQ?tv$BSlDRx|R>WVEC%O}Y!_EofsokI%+bqfbUdhm(]aEvVrKJ);E|ZJzMF?m|cBRQeR-r<jC&WdEe!sa|vbv?()n*%v-ZcuLH/AlZ_hcgJob[TkOtdiz};dEDK');
define('LOGGED_IN_SALT', '}D(&}T|c}bjomeK*mbF{wP^YaE!eB/*ou;WsU+KN}Cxr^_FRa(=?C{bzB}?/Nc{x-<hx)h;sJ&;to@QO&C))+Yh]yk;)uGbvjphTehBTUIoFV=kHHQ(bs&Va/{B*Ommt');
define('NONCE_SALT', 'qi?><t-yQGJLZXMAl@pRLJQNysvJ|Mi(F&Rwj;tB]uk*pXMBfx*xOf/$GeFe%Pn+/+sl/Mrrbso_%eX]FRYJ?=d}LtFBoJmWbsYHz;h(mISvHCj_o]H<}=SpPz?;f@(]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');