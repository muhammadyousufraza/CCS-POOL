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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'iU7?(oMEWs2t?RtG$!NX)O8 rs4D>}e9M7l*V+T[C/nG{|-QRP|#(y5/SPT(5cGn' );
define( 'SECURE_AUTH_KEY',   'T%`XjOVX-;UWD.$<ZsPl#y5~#BNN%okOJ|er90QxX_X/[Iw3nvvyMhpFS#1;L6=_' );
define( 'LOGGED_IN_KEY',     '%RAg#Dvo!)t5D`cgDD:*Pz0VA@Gy%f-Gi$/W%FPs[ny,#HEs1}{RqP:^2.T{9rHX' );
define( 'NONCE_KEY',         '$IwL_KY7sUy*,ps ?;<21VBbR+;P0I6AVXv=k.W)=QSScB!ptE_`aU~eC;~K0v.7' );
define( 'AUTH_SALT',         'WED]5^iY}{t.h<QqJM0(J.TBN!0,!x, [i$Qy):!90E%y$zB|Sw/hQ?0{y3e&&WA' );
define( 'SECURE_AUTH_SALT',  '85xmZ`ip92[b>Aw>DE7(| X!CO[U5R{h=W,0MdZ0^EB}=sG%[EIe7k$U+T.8er?J' );
define( 'LOGGED_IN_SALT',    'roGjHYHCWF?+n>1d1EG=Gw/if{}2?{fw#F5_@mNt8`M+2Xh~yzd.i[0^ifplD!{B' );
define( 'NONCE_SALT',        '&IxQvA,?^!bslud}tKMm8o;Ix3<8Y77RZ^{%$s]:xAPrI87s0Z76Mc#$pYy${NE8' );
define( 'WP_CACHE_KEY_SALT', 'tu1Ar5cikCeO3fr8xZjqrFjFXA_Qp6(:IY2a~S@I3dNS9/o*>r_T,fx4+h&/*GuO' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
