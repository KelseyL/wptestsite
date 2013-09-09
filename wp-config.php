<?php
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
define('DB_NAME', 'kelseyla_wpremote');

/** MySQL database username */
define('DB_USER', 'kelseyla_jones');

/** MySQL database password */
define('DB_PASSWORD', 'k3l53y5805');

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
define('AUTH_KEY',         '>`8{ANg`h1;O-+iYY`d:MIVb 4D*:<c`Ps2g)rm,5n-r*cK9M0c|jj]EUlYw-.fv');
define('SECURE_AUTH_KEY',  'd^}4NRw$9}^@V`tSUkNi88{rUgC @KmTb}w]FG:n6.3WBBg5b;B|JM@H2qW7RBpj');
define('LOGGED_IN_KEY',    'YOS5q]RMAz|84!D];<-!/_$;A`G.4iL`Zc;g|+<N!>])%BN^%;-@-V%e87qONc-s');
define('NONCE_KEY',        't{aNUJ,QV<5!tB,]mO{*^B,~uc2|0I~$_rO,U= 9=LjVKL.)aizBrrT~yAR@x+`l');
define('AUTH_SALT',        '#d6QPrJR*tH%k-kJl#gp }u^z,,ms%I5M+*+4|>*g4lzpY.,U^z#r8 fh&)z9_|g');
define('SECURE_AUTH_SALT', '_la=3IZh=}*|kMAM(:GL>],tT7aj[Qc-xqhSOsT&D-jL*RyWs!B-oXV.:% -oQoy');
define('LOGGED_IN_SALT',   '7IiJh9Q_nFeJ-^LbLq.LZi?lvk:{x~5O[;7+iNov-FvN:?%w;W0kOF_y.pqDR@-k');
define('NONCE_SALT',       '2z5}]A8x0V|xHn&]8b[oRRcwH_[|eyL&+X}e%zFiv##N80gqMyQ~C;-Z6p/|@{:/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
