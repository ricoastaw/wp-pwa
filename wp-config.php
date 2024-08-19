<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'earXQ v9|QTqN?-S3bNT1&N|WScB-lG9g&Unv+.t@xM:n~Lv[?gH/ZlV=QhxN o/' );
define( 'SECURE_AUTH_KEY',  'h)f`=hWM[b2P<oG!FdCy$r!;w6->#0D@9JAa7ScTbwj5H3~N8w2LaTTYeL@6NnU{' );
define( 'LOGGED_IN_KEY',    '/8Umi#Zz0VGT-y:2YUP>cl6oK[qn7>?8TKC+clRU+KK!@<#@Spl<dK,lTgTOn$R5' );
define( 'NONCE_KEY',        'zY`*M NJL>:l,{tmFu/jvH6tkbBo {|i~WewH-K+_VN^)TFB=_Z]=79Du6^z;<`m' );
define( 'AUTH_SALT',        ':@<+Rp3K4+ -rJ2SW62qot5xgEMVbgw;=1v$p8$;}yasn8%y]!TEak<II^zq}sic' );
define( 'SECURE_AUTH_SALT', 'NnfUc1npTp/H(1mG,z4Mn,J #Cq#Z ]zn@6j+;vuDCAjUEy/u vl(9M8zD-Mwu&Y' );
define( 'LOGGED_IN_SALT',   'Nsj|F/8t8Wue4(O5QS?T3FsEou5/V`W*}0DkrCovw+OxU#e>J#D:ke0)1R~mZj+.' );
define( 'NONCE_SALT',       'kNwyWPo~-eNACSo@Wh!PUlCIh]<StX[w6C>fVZLYK`eKV?d>)lm8%5d9;o [3df%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
