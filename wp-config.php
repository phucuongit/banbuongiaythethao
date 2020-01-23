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
define( 'DB_NAME', 'banbuongiaythethao' );

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
define( 'AUTH_KEY',         'fP<WWR.F5a_r-$/^[?M$y]:x%t)wH;9.qIhnI`tTA!4>Yw4rTCGs,_DUu%H7s,%=' );
define( 'SECURE_AUTH_KEY',  'tC<!cLH)^vg6{,n@7dhCx~h<5GHvLl +8KY5H!8e*G3Pt=&dC:vv<zr@Ts~X/-Q]' );
define( 'LOGGED_IN_KEY',    'z`o8O+N/KG!i7wy)5gkm0AVjP`EXXv9!BmPa=2dqK=;ec:)s/%#T&=!_i;MQPNz1' );
define( 'NONCE_KEY',        'n%.s:xHqA$_v5MT(zV7ueFChcix]qLl_ds lUfO04E.y589#qx5-%(iVqlbNyI~V' );
define( 'AUTH_SALT',        'sKxDKfxy.T.|Lbk=-7,;bbdl6%s@T~!:TpaTUst.K k$vRGfRH0KN?Ac`ZjR]^0h' );
define( 'SECURE_AUTH_SALT', 'dy){.Yg0wkzl%n7t5OmGtE60sju*!fWpW+4o}Y,p4D +wH^*.}|YZ~&b87+LJ?w4' );
define( 'LOGGED_IN_SALT',   'W(]n>vdj.saf<<)s:dvg(D]GZ/z[Yem Xt2N,j> jdl4{t/zqG6|d-=V aFxG6T2' );
define( 'NONCE_SALT',       'r_zM5-E+M:|MB3@Kd{#f|^bIrB:xE0>0{5Hkz5ymNm+ax<Tk-lK@^(AyWI@L5m 6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
