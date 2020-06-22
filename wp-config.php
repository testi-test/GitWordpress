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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v-guG0~e2H&*TxGQ=BJ9Q-k#I?bge;#yuS1[&^_Y<Rv7vv]Ya~ -m`&8Xk,%@Y<:' );
define( 'SECURE_AUTH_KEY',  '-050FC]p=*Xr@KM!0kF@3KMlBgVZt&9s9Xv:8y,bhBsh]f|<Zj`,Ij0Y?QMd,n<a' );
define( 'LOGGED_IN_KEY',    '`.C9MFu.k;+aaaXR8?l4i$wd_-73{+HEkNcxLikv7mAY+2`LiqMQ`UR@]Q_qcrY]' );
define( 'NONCE_KEY',        '9txF8vFvv}>CW)F?K/qMN]n/n8u5%+[ZzQ<lk<32}vO.zdW|4)6JJi&w[:,jK{Hu' );
define( 'AUTH_SALT',        'I9!7)eLaj#$k?@8tgRn?FcczU2UDpBTOWH{i{;dZPNX>xUT}3Dj]f>M-..27j9eg' );
define( 'SECURE_AUTH_SALT', '47W.c8qnx#U_2Ri+%vFGZtyKBoaj!q*LX_F7.r`C7=y8J!!iSN6)&0:rL|qAXmr.' );
define( 'LOGGED_IN_SALT',   'f}QwX3b VT|!&zX_OaYz|}M]h,adghMoGKqoE0xN:R5ClaVqyznGY?~np$Jey7gg' );
define( 'NONCE_SALT',       ']|kmk8t#Fk7^vD/d}+3$E3me?AE|Y1QyMVMDL@>/>udqU>Tsk{=$b/4xI4G)ZD^Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
