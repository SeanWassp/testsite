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
define( 'DB_NAME', 'forge' ); 

/** Database username */
define( 'DB_USER', 'testsite' ); 

/** Database password */
define( 'DB_PASSWORD', 'testsite@2022' );

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
define( 'AUTH_KEY',         'mpfu=wKf9cK}Av//vDpI#Gd$FupD#HzV/cm?4j$E5(XFSo&r%Ym>1hQeYh@4%H~`' );
define( 'SECURE_AUTH_KEY',  'Ng#;ThYFm,_%-T3mm[juO %*ijmW3eOYuN7xqPyDRH<MMSsjAiO?>e#dBUHO6#n>' );
define( 'LOGGED_IN_KEY',    '6CiLItJ}L-3xu9(hI1cDLf20I]XHTP-]CuM l]vW/,C&OB@GcYE,5a8#=IV&E,v?' );
define( 'NONCE_KEY',        '|Uz2-+6L QM F)H=/Y<{@=[Y6h<X+3!xn}>vr;8jZ!p&>DGj@uVY|Ht,2k1pj/ Q' );
define( 'AUTH_SALT',        'wTSi_IA|e4YE-s)l~k=0}=pgK ~L2}B:ZPoMzQ)YX)tv*M$Sf@ %!`Hy{o;~trw-' );
define( 'SECURE_AUTH_SALT', '*wvM]c}:t!v-=8b1I%/y@X#gQR|7pP|+*Ag@Gejnhx1Gxh_#S1z{nwF1+IjTj|}G' );
define( 'LOGGED_IN_SALT',   '(8lU8~U00%uez0{&!T*#7+>[8y8+0h8r2r/RoZtK}5`KQ}*hGsw4Wqm{|*}&X#0{' );
define( 'NONCE_SALT',       ' DUCx|D1o4q%S`539bM&gr:-{aR#7~k*yX=;qJpiMa?67GS?peETk{<fm!#O!YPe' );

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
