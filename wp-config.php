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
define( 'DB_NAME', 'arghu' );

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
define( 'AUTH_KEY',         '-v^Wi/q][Z90kjml4bu1q*1nee[pDCax8,cXP~d6)JL}VHZeL_`e!1{f-6uY3k%*' );
define( 'SECURE_AUTH_KEY',  'n9k*XM-MyBcOmEW/w*Mk,&p:Y>%^< ~A-qjN*9>e18ukN7^~b8# {Ls#9qSBQktE' );
define( 'LOGGED_IN_KEY',    '*.f&JZxU>,779via5!,bQ;5fhbUpZWx0oJ3XxY/<FeUFOo^O=4ll+{oW{J74309R' );
define( 'NONCE_KEY',        'z?x,&99X>xfHw&Pc}&%/E5Ny$M=K6P4Hx]FU#RJ}MI}0/IC1 F: |,[bsR(1m`?P' );
define( 'AUTH_SALT',        'nh;c*H,1XR;JYG r]$o|`ygl,Su{HX$-=Zl))~[Hi[CcipGAEX!1}Zp9m=!G/=#<' );
define( 'SECURE_AUTH_SALT', 's(Mh#_UIIRh5g6<,; `!eq/_I|8xqRaRWcAE<,by4_,w9))bwbmVV!_]O;Aq#pJa' );
define( 'LOGGED_IN_SALT',   ',o4}|2_b9!9)[E~XkEZeSbm3grnFF@NiwB vG?)2@zRi:1t<l0gsxFcsx |Rp/f|' );
define( 'NONCE_SALT',       'XMs7DzdNQD;6&)6(amJSnWs4W5uoR#cGO!nmjxji=aRpUizsxK^6-ajQ-Edwtnk?' );

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
