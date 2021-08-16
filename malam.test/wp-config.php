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
define( 'DB_NAME', 'wp_malam' );

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
define( 'AUTH_KEY',         '))zkT];woXlox)JItW!Tzt{Q{fXZXLcizn+DDe%^3GXZUvZ2Av1,%ntKeDy-}[Z$' );
define( 'SECURE_AUTH_KEY',  'uT#%aOZ.BTUcB*DW2(h,c}TI_e:N;<d7|x0gF%9`&@+D~*JK)KX#|hfJz-~Qu`gh' );
define( 'LOGGED_IN_KEY',    'P3!s>&VdhftV+aNk@[E@ASZB@S<8H72Bd;X#usy1uaF}LPF-,U(dslpytf}^s3CP' );
define( 'NONCE_KEY',        '4R]JFm;I6ed||wI`0*gV%DIKVMyz>!.(ZF$RyOrKlQ)C+a$G.m ZJ_rA}7_?vp-8' );
define( 'AUTH_SALT',        'eRPR)e&6[i6C5bdD/HgPugD5#=%ws`tzOQgEVaPsmhE]_?l4?&AZlh]TU|L:<K16' );
define( 'SECURE_AUTH_SALT', '[r|%5ooZWRPlDsFU##3^KYQ?^2~9quSwT4bT`9%H[_9w1i22*u>@#)t7mz;_f>!&' );
define( 'LOGGED_IN_SALT',   'OJma,,629}5:1{K-2!M{i=T*c?WB}e3r>[[MqPpx_FgoQ-i,j1EwuQa+5|u8S8o?' );
define( 'NONCE_SALT',       'gk8mVxKFy+!FLU$[>nGzfJ9)Jhiq97twcQGZyn3*L ;IyhJ|_m1L,jJIJtDsR{JW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sis_';

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
// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_DISPLAY', false );
// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG', false );

define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
