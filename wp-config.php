<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'PROAUTO');
/** Database username */
define('DB_USER', 'root');
/** Database password */
define('DB_PASSWORD', '');
/** Database hostname */
define('DB_HOST', 'localhost');
/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Gc#&oLvXdvxtlPY$l# zM/wY{[Ue;/yWM3Xq:_cd^8-x{s_rZ+gT>Y?B3U58K5#^');
define('SECURE_AUTH_KEY',  '5@dR};pmUQZO ,L[.DCi~AK`vitq0M!/W!&d{`^G{C*XW(WqPAHq7<W8Qj/pVqX6');
define('LOGGED_IN_KEY',    '}O;WkQpx_!ymHGxhCU8:P3ni5iG%r7plf`uO3%C/*,7K;=[:7m]z_r 61liPg3nc');
define('NONCE_KEY',        'kxYN-H{/+S:HI8{YU}h?SjoB!0]]#J~ ]/BK<1AF}*>_?HS1K2buii@TYgoFlD?X');
define('AUTH_SALT',        'r7fm`9} wV_#Chz]C^F4DxHpV01{PV][V}vPr>p@>y vJ+tllT= %]hYr6b$!PLD');
define('SECURE_AUTH_SALT', ')HkeVP2&7xDw397 M~vN%T1J{Y>~/ZPSmT:N`ed-k_!p>)_Vt0,Wf:sW}x4!L{3^');
define('LOGGED_IN_SALT',   '_%-%k1oPgeb;1wU%8j.wQ6C7kIwa>72<9kUudazWZ^;hA;z&0g4ygTUtkL)8@#4O');
define('NONCE_SALT',       'z$~]8ohB6tkL~fW/XY_d#QeZLYLir0m>Qs&.IngKtzP41jrPZQs2kXfQOyNxZB?q');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
// define('WP_ALLOW_MULTISITE', true);
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', 'PROAUTO');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
