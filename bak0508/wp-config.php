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
define('DB_PASSWORD', 'edirap2012');

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
define('AUTH_KEY',         'CK<#qrO:-uJs1.3`58cIC},Cfrb[$xzQP*jKhN/:yp8||0?M//G!V{%G7x&w*Z+4');
define('SECURE_AUTH_KEY',  'hR9kTd!!]IHO42VkCU`+esT#kny:2H`[x|#$0g-A ;{I_GFQ.dqA+b-(|3)=,}w2');
define('LOGGED_IN_KEY',    'S|G%u3bPadb,bOLB7P+2KMexvFCqSps8,.W88r1|-2K*:i,~LE5ou%}?B]KZsa~U');
define('NONCE_KEY',        '{ {LJrbx7<,+^2t&@:8ah*Z+=T}.n1|/9{]lnqZK7_O9jb`?J<a7ws.L5Y|jQyQE');
define('AUTH_SALT',        'M-8TskL>{^B}N.O*yJ{?IDW!-;m2#|-`L )%J,}4Mc[%_lLQOZ-F(JMN|C3mod2!');
define('SECURE_AUTH_SALT', 'R@)#G02wJM6sg;,yv,j5*=+~!/# Qh (^kxdTpj3OrEWU4m=R[kOHcP%DztC2Isq');
define('LOGGED_IN_SALT',   'wv^e0Er7YWeibMs/fksMLMq`&LmDQ=5p?ToHKC/mQF+E?N|XxYsXIj@1k2)El&-v');
define('NONCE_SALT',       '&j1W`{=%kW9B31!D=38l;V;+[!3goPDJ;[%;_KQ;Im8I^KgH<k9jpJV`g!09!Qr&');

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
