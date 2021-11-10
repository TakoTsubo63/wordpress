
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
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'alex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alex' );

/** MySQL hostname */
define( 'DB_HOST', '54.213.84.28' );

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
define('AUTH_KEY',         '$4Z7^K+AOFWXA-_H?+i{@A)ty,-bVZTiX=IR*PnW9Ra?s;-h[Mo&~tmDaEmTs.AL');
define('SECURE_AUTH_KEY',  '-j$O[;Zr<O;Un!UyW]9yk@l$sT|lo|1<^mWk`[-JoJ4HTye|zbqf_#)8AD+9l8~J');
define('LOGGED_IN_KEY',    '<|zc*vNvfFC%[txk9F&T8#U>{;N+bX,(] {2NsBvRH%bu$0*2oL!jZ4da%Me`vBw');
define('NONCE_KEY',        '_R>cY&;ybH;J.W<ABri=Oc|VKrlnpSh(}T>n7zDh)SjO/4wN|AiF`M0]2]/pg;%=');
define('AUTH_SALT',        'r(Yx:(!6@.ll!Ya:V4?.+QyFK`DV-Y=azG^5kx4hnWOfOVc])5>I/Mv<Z45lT_5P');
define('SECURE_AUTH_SALT', 'r+HSoq$3M72JyO$-+X0j@@e4x-t$hA8|++9d89s%[X9pC;v2s0d]A7k1(ko|fsX%');
define('LOGGED_IN_SALT',   'V{D+cyxl)%do7{V|Z=1o;[iR2;@Z52s7{<{-LN>P06i3V}L!C7Vnd,J8>F]8_-wQ');
define('NONCE_SALT',       'Vx0;EU!e]i!hh/cN?n,LKo|1v/%1<-Zn|Vwp@h{s-&UAa+ts9*Ntf33YQ-A(G*-j');
/*WordPress database table prefix.
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
