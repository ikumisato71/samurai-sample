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
define( 'AUTH_KEY',          '`$ppze9Y43?/ftA`[i<6)&1?IuV[>%q+[+b~e=WPNpV{S(o%vV`(IYozi*/%}K-A' );
define( 'SECURE_AUTH_KEY',   '1|=i]e;g6,N`_$#]G_2`6Sr*R]<6S+|u@z18Q2=%CmeZ3Z?7@.`)YG]>GTboS@Au' );
define( 'LOGGED_IN_KEY',     '+xlix72]Jl9&3,T2U(+No|4v+?[:=6J&WoOW.&k#S@@eCfpWNHF+.5|P}Y_T;6,S' );
define( 'NONCE_KEY',         'Rl.c+m6oce/4 ?S`a5v@YG`uUt5I,gzeyUVR6o*ukX@jKj!vat2 [Loi(lbMB}.D' );
define( 'AUTH_SALT',         '2(2oc~ujklBf!x 4*bSG]w<hxRr9fK#K}$#jn-|)3?7< #y_KlHxYvojTXt^0_rS' );
define( 'SECURE_AUTH_SALT',  'CxT>B|`#%lNkw%n-O/GoecDTc(D#tb5|A}k*^C7aRb,kpEp)nZH+$?R`7_8kYL#T' );
define( 'LOGGED_IN_SALT',    'oIzMKe#$^sKTG4nbw:[{QV=|&@Z>%*8bJ)?-OnEi[GSJJ~wq]D]KzEcb:qk?9Tq)' );
define( 'NONCE_SALT',        'oro)ga+Qi#OXG8dM$vKG^VWd4B$:>3?T]gP<-k#Lg,&4;GX!m4~/s!YmgN/vfbau' );
define( 'WP_CACHE_KEY_SALT', ',t:LHV(j1fq0sl0EZxW(dagYh$#Jx@Bh}G.>2>s%tBq)Fy<0[S50s[7H7|:l{}.$' );


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
