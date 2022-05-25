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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hammad' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '$DxKy=|.u2n&%Xy@}&QIQ(L,q2 {4[>qA@*fV4u)hqV(2rYPEXHl0`p8[35 K/9C' );
define( 'SECURE_AUTH_KEY',  '?S<%`&ieX[!/xzWJi/A.983mppMn,$MaG~t+IB~p-^,q.+ucacp8#vA[cYJBbbh}' );
define( 'LOGGED_IN_KEY',    'X:d[zw/}z@n@x;(O/BSs,A@r-1wWO..IJe^F;;4oB4.7QlvWYr7U*^+T{4*1I*^k' );
define( 'NONCE_KEY',        '^z}@7qMw0kBlj%<_>xXYD6YHAGZU+6!{S]1!})B#1cck`T|?}o1~=]Dd@:,))E1-' );
define( 'AUTH_SALT',        'd2M0=KZne$NB;qoh5:[U}`W-Qet,9DQJs_8:(gNH(VQ+&7;XlE%`G xj=Ut7@Yg6' );
define( 'SECURE_AUTH_SALT', 'Ui]P7$DOA5.,(4YN=QXA9m <P;Q0=,PaA/`:b-E5l=p++OSC~<IPi}Sb9()yZ,&U' );
define( 'LOGGED_IN_SALT',   '8q+ E%QB-?Z|X:$2a)|_zT:OYF/%@);Dh^w713kU0mzV6X-|&5Z|jnXg0U0$6KBJ' );
define( 'NONCE_SALT',       '6/Pk]v/ Zq}K,+8!Mk){!(T13ub>R/M_Or6Vbyn[M8f`?z&m{g_M2%zWvr%. ?MP' );

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
