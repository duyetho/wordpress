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
define( 'DB_NAME', 'testwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'G|)Q,ND)L]zl]K+..avJh3H(.^bsJCgyl`69b wUC%^Z6xn@.oirDJXiiX)o#M/2' );
define( 'SECURE_AUTH_KEY',  's>|Ab^4R}B[Pv>M_}Xy0s5}VnBX&s4$7}C?`+Pb<MYsT?&XCu}U19#^+&Mj^~S79' );
define( 'LOGGED_IN_KEY',    'Dp(-ajgxgs.JIn[zGxvk?+L{=PN=A!ABh:PIT@xi<cl8;WH$j3mDk@0?#BuSw^M:' );
define( 'NONCE_KEY',        '3mLYfuicdA^6K!@Qo9cR=s~9#1M+ycY(-T/mWt?>!uZw~fe]p]$i2slFnTNLo7t/' );
define( 'AUTH_SALT',        'Q7E0Va*K]N}kxCTDbj=X, rN-J&U4emuSg;a(D)ji,#GZ|#_Bqv;6q.oeREMF(ed' );
define( 'SECURE_AUTH_SALT', 'PK-9M[M`2BUK?9Qg{3? ARbd4{m]{zVK<{I2i%0[oWF1=njA+EvMEAA%g|[OV!#(' );
define( 'LOGGED_IN_SALT',   'ye?{_B~S#.Pa|EiF]VVmj,1[]T?U?eIGEN++q/7df&vS^zQ^Rq!CGWn8L:wbGziC' );
define( 'NONCE_SALT',       'v{qR](yn7Q#%1h)sRYmqgigW9SkegOl>A#!`>QB}Wr22pj]i.`mH(Ym`~Pu)DtqX' );

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
