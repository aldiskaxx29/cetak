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
define( 'DB_NAME', 'cetak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'c5@5Xk<F@%jX,~jRFo~vk;oq%oHHevs,>kq1~wp7)k1c0Ee9kdOr{2;*G1V!unM|' );
define( 'SECURE_AUTH_KEY',  'B5jY[A!&JF~Z*Z{Jee0ar-tk&~C`Y<oR3TnSCO{;VfrzOe`bYY<2 ~2pSCPpmyus' );
define( 'LOGGED_IN_KEY',    'NHcJ*z2>FIEaK5#KsBSAUg[NEr>J)u~uU^W:x]H,7<)|vdpVZ<hU<r~*Ss=jdvk~' );
define( 'NONCE_KEY',        'awVR*<pXs,t=)PflL#Q(o[=j%k<xZ-LbFC0n]${yCXrq+-}_NRDL-up<}l,!hjyc' );
define( 'AUTH_SALT',        'Ah:p2BcP,A,02y6U`cGXsuBi+D70]M;c4Y-VH{Sk!gf,E0(@^<i:R+Z8h4lT~5eI' );
define( 'SECURE_AUTH_SALT', 'vbx%:x(TOuFvwrzPX(<a9wqOGES;-K8L/I?kzP?2-moOn31hzLIFW*jg73Jy@lBA' );
define( 'LOGGED_IN_SALT',   'teS!v_nm_aO-mGU@g[SUvq]GY{R/+^Jw9/a8aaEVTB6w2L>?yG4p4hh&IVo 2kl{' );
define( 'NONCE_SALT',       'sWL?{xM$SBbKh=%[=0NOl Z_f4dIET4jDFOPg/Q-R%vfHth562(~#V=mjY`Z{P6,' );

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
