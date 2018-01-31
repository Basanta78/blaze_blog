<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blaze_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'c2rabstropy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ')aSM$_#!6R>`eP1~pQWwELQEe~_}oHt+Oj&Zxh|^`II/PUHp{50(T4Ghg5+8^iIv');
define('SECURE_AUTH_KEY',  'w8VN|Y-51oW7%nP(;/zW+)b:RQ&>TKVWrmMQ8t;ZN-!Qf9isvW?(r4n8_~0XQpG1');
define('LOGGED_IN_KEY',    '0RZ!U|1B2MX*_48Ad,7&QOp1J2<XZm{T=V-G]*AQ7u]g{nw6_@yE*2)Mv4m}F{!q');
define('NONCE_KEY',        'UTHP@H#aQ1>D06`3,0k477 K(64eM@d`&vD+5P4H8Kv%$ae[)%WBU!8Kkb;JE#b8');
define('AUTH_SALT',        'oE-_{7U9p<&c<_05ugwb:f;KLrUG-pVZx|H0%*1Ft`@`@Zj >uDh`glHhC$nFZb1');
define('SECURE_AUTH_SALT', '*C_Scc%2Ohh{E1@|7;>H><f[)DC^2CZZydQrel{3j^at+2EWw(j1*knc9H/^D:>Y');
define('LOGGED_IN_SALT',   '(xno&`OaWkYZ*>H0)?D4}IZ3 9 SL0hw[,Tv((Bs)j=wt3CC~RE`VtXXY!4Zi=/$');
define('NONCE_SALT',       '=bH#*eNtBF4wP%Q(TvfaK9G/Z!)dA=(ubqt9C/-;HRh=r#*bhnoA8V>3N5[h,UgH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
define('FTP_BASE', '/usr/home/username/public_html/my-site.example.com/wordpress/');
define('FTP_CONTENT_DIR', '/usr/home/username/public_html/my-site.example.com/wordpress/wp-content/');
define('FTP_PLUGIN_DIR ', '/usr/home/username/public_html/my-site.example.com/wordpress/wp-content/plugins/');
// define('FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub');
// define('FTP_PRIKEY', '/home/username/.ssh/id_rsa');
define('FTP_USER', 'my-ftp-username');
define('FTP_PASS', 'my-ftp-password');
define('FTP_HOST', 'ftp.my-site.example.com');
// define('FTP_SSL', false);

