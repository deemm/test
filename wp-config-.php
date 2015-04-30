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
define('DB_NAME', '-');

/** MySQL database username */
define('DB_USER', '-');

/** MySQL database password */
define('DB_PASSWORD', '-');

/** MySQL hostname */
define('DB_HOST', '-');

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
define('AUTH_KEY',         '<_b2=B/MVW^A=Ip$z5GF!Bf5N|)5ixq{5RUIKY7Navin@a d)>&],nUB:ytRN-@;');
define('SECURE_AUTH_KEY',  '!_LyT_P!T`YqR]f-o+7Tnl#lc8`vBJZGusO+8g6KYDI&To [a}V1Tsf!aySM,RpY');
define('LOGGED_IN_KEY',    'Y>nxm+Yu@y](GCoz2w}}f:HG+t^SFBC+_7v?8n1fY|I]S|(,I1pYp9k0*f<;tuNS');
define('NONCE_KEY',        '6>d_D`6G41}IM6Nwk+3ry|![,}i2c,M 0~50zx:dWso_[:5V,SI0c<o>n2hT6x.J');
define('AUTH_SALT',        'Xqc.jFC<i3~l+@dG-[XU}K-ZJH6 }DrHe)EUcJc=yRPNh[Sv|x*M-J91ESW+*6ln');
define('SECURE_AUTH_SALT', 'ze<8p3Og-$27jp.0# :P^{M@`ZkssNCtJEw$?j><) g+aX&Q?+a-s}E]=-O<immm');
define('LOGGED_IN_SALT',   '~ll5*meK$vTDlw7;f%m@yL|2 e{afF@mo||s}K+%u#wdR@ZkLVwQ[q pdp%ua#;+');
define('NONCE_SALT',       'cs*^Qdu0G|=+VVJ;rSJ>{-L.Wpx$tb|fTY(ux~8- dkF/-P?}Cm,]1nX]V:HCY+}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lmf_';

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

define('UPLOADS', 'media');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
