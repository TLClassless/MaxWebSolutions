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
define( 'DB_NAME', 'testwordpressbackup' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'D&+>gOiSWtA-R=0|_oOl6r+h,|!-MpZE%s0NjJuZy8vYmN|v%+6(4uEE=JOFR34$' );
define( 'SECURE_AUTH_KEY',  'h-if8a#`DWX?Z6az/[;yoJSU40T$WKx/zIz!}+z56q/::X;8PqJ62U:%O;:r[I}2' );
define( 'LOGGED_IN_KEY',    '!I||KxQU&<d5D-sdlBpQP|LM9wEiQdD97)-!J]JE,[r(%mpPJi{s`Sfl/<G`!&+U' );
define( 'NONCE_KEY',        'RGVG/~=(P{s]SN|<E+}0>*:(cZ!8N~4=}r}DN8[9z7ywZw|yZe.*DRsZOmBMga=@' );
define( 'AUTH_SALT',        'L+;_O#nB. SqagG$)KW_[2-cdvf_B< 6oLd/>G3(N]k]Hfus bn.1]/|~4I;P:bE' );
define( 'SECURE_AUTH_SALT', 'm|O4I@)Lq18p6.BrQ^N}nKczk!iSD=Ah]{M/^XBk}ZJj~=SmJjjH<)W[r-sCafan' );
define( 'LOGGED_IN_SALT',   '/M6MvCsx!|}BzG7*Z<|%6}nX/4rE8Kn.uU%l^) yze[*Yi-D,8>D!g-1@[VNXg|e' );
define( 'NONCE_SALT',       'P8^$NfCO$FHrJh9:]E1aw/%w:isjtj]UH9rPjss33>H}}PBg~gdII}*p|]tUlbyv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
