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
define( 'DB_NAME', 'mrkalai_db' );

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
define( 'AUTH_KEY',         'K)wEhj(=-3?kVn?ZNm9j5cH@jRfOh{.Uybjsg%6P9eIR}C1qLL`n(<=uPF;h>AZC' );
define( 'SECURE_AUTH_KEY',  '%P^:`+,{,j_VtKf*q9As>[4R6gP/JKQxzhP}!O:xG><&vMr5]xbk(A9k3~&M}[@D' );
define( 'LOGGED_IN_KEY',    '7nUa!_E.obV<Pwl5H%]6M7b,~X#*U fok>Ksx@g@NgM[+|g pUs4-@yd@rC?JO!2' );
define( 'NONCE_KEY',        '#0Oiy8$cRfjjJ<s1J] Z/D*`C}``=h/-Wr}2gEO9&<^-G$Ppt*^I<8(<-35dJ}6,' );
define( 'AUTH_SALT',        'S,,#-=qVpz0: L?=&Ov72p.JbwS&8#x6ms^.kANKpFoT^%hVt#`kg3;SS5TVO=S-' );
define( 'SECURE_AUTH_SALT', 'irKw :XZR(txu`m:~An=u!qwQseyHErs5fE>!2]jxKq`9z*9xTPI~g_KrOQ2_zJu' );
define( 'LOGGED_IN_SALT',   'CW4|6?:#*ot975i~@kt/y%$[VV{bOB8R{B.;ND=^#CY|6Dwk#(,b^Gd@HK^O``$s' );
define( 'NONCE_SALT',       'tIH|V)qOu)[9>^_u5Gx#Wv7y%@zjw@v~@!J~^<#GoZ;GS<|0M.FCbP}_8#8[vxbI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

  define('WP_DEBUG', false); 
  define('WP_HTTP_BLOCK_EXTERNAL', false);
  define('FS_METHOD', 'direct');
  define('DISABLE_WP_CRON', true); 
  define('WP_MEMORY_LIMIT', '256M');
  define( 'WP_CACHE', true );
  define('WP_ALLOW_REPAIR', true);
  require_once(ABSPATH . 'wp-settings.php');
  add_filter( 'auto_update_plugin', '__return_false' ); 
  add_filter( 'auto_update_theme', '__return_false' ); 
  define( 'WP_AUTO_UPDATE_CORE', 'major' );

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
