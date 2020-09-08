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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         ' _ 2cyoOpO8`x~0FaYy/+`4j/ePY9rY_,|/b)Z)AsD6>r[,M7deq@/-x}16DSOMT' );
define( 'SECURE_AUTH_KEY',  'LqBB*u7:i]3hc0eB]9}U0.^ n;cA?JP-eDFg-V3CuWw@*:Ljwy^_/ns41GC#ViO+' );
define( 'LOGGED_IN_KEY',    'z}icwdC>q]%,LUyJ89Bxd>frZV-4z/j7*8^vQR_G2Pw t+^gHasVemSrLd bbyjg' );
define( 'NONCE_KEY',        ']F%VJ!AY[b^}RS$gFnu$X_^7DwqyBwrUM1uHJG%^7(S~oHHJZyJ9?cc#[ybm(>/O' );
define( 'AUTH_SALT',        '94Rk%|w.RbfC0ns2%Ob7Sy1TI 0Qm_C!t|z@r)&7e<`x)9(G3_]/>J,feQ4q%yPg' );
define( 'SECURE_AUTH_SALT', 'I~umu]w _?=H2T/H@>T|@^mSsg-Z^@T6iIW)$LE*hntx82Aay`iz1RLaD@N)[%)y' );
define( 'LOGGED_IN_SALT',   'F&>}AjGh8jx#^V{1b/mv:V;P@gFx!rFzs :)Le{xMU}.z4Iz&PbT1*<bcZ] <O20' );
define( 'NONCE_SALT',       'L<Q;$_k`$K$&G0@J7;*1AvkWH8dAXY7f%p*YfCP`;2~U{3(LZN)D:Siu|Z-E0^hr' );

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
