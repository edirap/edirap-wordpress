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
define('DB_NAME', 'digita05_edirap');

/** MySQL database username */
define('DB_USER', 'digita05_edirap');

/** MySQL database password */
define('DB_PASSWORD', '********'

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
define('AUTH_KEY',         '7|uP)yHn/{,K:tWs,{z:8_C-J8<?B%Rwd-3|Ch>Gbw=fPCv+,3fSL),0L,WX~@*p');
define('SECURE_AUTH_KEY',  't-,0_:UWVZ~jsXh*q~g/g&y>/m%(s7oel!0Cnk|,TL-<EZ2eam.BdkF<A5=x+9OF');
define('LOGGED_IN_KEY',    'sq76CJ]Z;*$DVnb^!Li~Z}5cXHkw>W9a>6@t5m/Ygj~bf |{8lEUs-Oi|x)_5d&a');
define('NONCE_KEY',        'BNu@[a59}VBy;r~I}18^d9-G^|x6jg*yRoV%W:)qL6Tr5O(}Pm2{^k_:&`ixs<PH');
define('AUTH_SALT',        '-?)@QZYu.YT?>UcS)m-Y~IAB,2.;7P]F|H3o)Hn]SiI3|aJ|J+;k6++&Uc2tNH0x');
define('SECURE_AUTH_SALT', 'S.3:rCM`9k]DHL+|MI)%Z3ejW@FAa-MWg[Q/_tQ`v/?nW&8A_(`<lGO%V](4Iv-%');
define('LOGGED_IN_SALT',   'K<}K-GJ:;|.lw%7=M49eai4-3>O<3Q)L{W]V6!-&kSFn>5Pw4!?>M15,qNxZu_@V');
define('NONCE_SALT',       'a %YxGbWHq+qv!QX$hp,Lq@(5>,M+Rk9G+EM`)Ct&ATe7{ENnycS4n?Wy2!{ldd%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'edirap_';

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
