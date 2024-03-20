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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define('AUTH_KEY',         'bozY*C Y|jtDV~N>}+0Xj&:jlLFTsY[D]deO+3B.9|Gq;74Uo#V$H-^#f-[yAs+>');
define('SECURE_AUTH_KEY',  '~&-FgmE:}@{.LGy?g=.4ARkIGE{Ld!+Yf{Hn{MvtLXTw!+?Oh}$&/p+0]mg3/EY9');
define('LOGGED_IN_KEY',    'p%/49q.c]x2@WhFbm#]-X:sQ5Ky7yZ4,:;=;& C^OY1ZEX)SEK<@HmvK+,#X>2&6');
define('NONCE_KEY',        '6,A@EV1i!t13@( u7#zuqgxa+8J (@)Hv.(QS+R0){ %O>t<31G_ItIn+eSspiaR');
define('AUTH_SALT',        '*x.@)25YKF4x,+hg3|,B^@6`RMIH|gZ&lGf;.e:&|jYq-A`py)+SLiXoH?~_Hygr');
define('SECURE_AUTH_SALT', 'Mb[tw%Jsi]L=0q-1 RQBPTO>eGrwWhz*J)n:vvpg`n,T1plDT,ln%7_]9>q|A%B,');
define('LOGGED_IN_SALT',   '%eu!?VYO([^oZz^mKl*5um![7H4H )+eUi9UY@dhHLlW.XfE1yoQ2>M4!dSB<HW0');
define('NONCE_SALT',       '5soAy~^Uu5,v``A54Ut#C3h9J14M`T|~8D/|$@p 2A/!4-D65]g@P^VidHfI4nUo');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
