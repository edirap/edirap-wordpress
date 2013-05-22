<?php
/** 
 * The base configurations of bbPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys and bbPress Language. You can get the MySQL settings from your
 * web host.
 *
 * This file is used by the installer during installation.
 *
 * @package bbPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for bbPress */
define( 'BBDB_NAME', 'digita05_edirap' );

/** MySQL database username */
define( 'BBDB_USER', 'digita05_edirap' );

/** MySQL database password */
define( 'BBDB_PASSWORD', 'edirap2012' );

/** MySQL hostname */
define( 'BBDB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'BBDB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'BBDB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/bbpress/ WordPress.org secret-key service}
 *
 * @since 1.0
 */
define( 'BB_AUTH_KEY', '7|uP)yHn/{,K:tWs,{z:8_C-J8<?B%Rwd-3|Ch>Gbw=fPCv+,3fSL),0L,WX~@*p' );
define( 'BB_SECURE_AUTH_KEY', 't-,0_:UWVZ~jsXh*q~g/g&y>/m%(s7oel!0Cnk|,TL-<EZ2eam.BdkF<A5=x+9OF' );
define( 'BB_LOGGED_IN_KEY', 'sq76CJ]Z;*$DVnb^!Li~Z}5cXHkw>W9a>6@t5m/Ygj~bf |{8lEUs-Oi|x)_5d&a' );
define( 'BB_NONCE_KEY', 'BNu@[a59}VBy;r~I}18^d9-G^|x6jg*yRoV%W:)qL6Tr5O(}Pm2{^k_:&`ixs<PH' );
/**#@-*/

/**
 * bbPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$bb_table_prefix = 'edirap_bb_';

/**
 * bbPress Localized Language, defaults to English.
 *
 * Change this to localize bbPress. A corresponding MO file for the chosen
 * language must be installed to a directory called "my-languages" in the root
 * directory of bbPress. For example, install de.mo to "my-languages" and set
 * BB_LANG to 'de' to enable German language support.
 */
define( 'BB_LANG', 'en_US' );
$bb->custom_user_table = 'edirap_users';
$bb->custom_user_meta_table = 'edirap_usermeta';

$bb->uri = 'http://digitalreview.asia/edirap/wp-content/plugins/buddypress/bp-forums/bbpress/';
$bb->name = 'e-DIRAP Forums';

define('BB_AUTH_SALT', '-?)@QZYu.YT?>UcS)m-Y~IAB,2.;7P]F|H3o)Hn]SiI3|aJ|J+;k6++&Uc2tNH0x');
define('BB_LOGGED_IN_SALT', 'K<}K-GJ:;|.lw%7=M49eai4-3>O<3Q)L{W]V6!-&kSFn>5Pw4!?>M15,qNxZu_@V');
define('BB_SECURE_AUTH_SALT', 'S.3:rCM`9k]DHL+|MI)%Z3ejW@FAa-MWg[Q/_tQ`v/?nW&8A_(`<lGO%V](4Iv-%');

define('WP_AUTH_COOKIE_VERSION', 2);

?>