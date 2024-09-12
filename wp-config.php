<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '.fl?p+c<|cwY)ib5*<#J(pMbGnNx8:v_>A4*7HoQ^ixM#jNy 5ga|lo4C854bQT&' );
define( 'SECURE_AUTH_KEY',  '-<+Wm}L<^M~4QY~I1d~F3>r>2~VqfBTst?v}#kAxjQz1m+p<,eSuI%4B;Pm& +ef' );
define( 'LOGGED_IN_KEY',    'xBuFW,MhDfGn_&rJ-|FrOEO%Y3^X<oo-GShQu]NpAb$G:9^1g(atSlO:4aNSyU:Z' );
define( 'NONCE_KEY',        'AQpP-Cz#Yqa!qUsd =xjZ:L>4_(*]cnGYh/zk2W[I}>9BYAkZ[#Ws#8Y;U(ZG>HS' );
define( 'AUTH_SALT',        'oZok38y3I[07/fGQR_Fv&A_FXuFUm<M.&TqWLY=C(bQb){LD8N5BpMA;raFap oe' );
define( 'SECURE_AUTH_SALT', 'bA0]&S;+lRrPgl}-DGk< w*-ADRGgBVJty>-.]eC@.KLcv~-*VH1;,w-hahM[PaK' );
define( 'LOGGED_IN_SALT',   '*F ?VT[!x*o6n<gQl:Pz!Mh}eL=E9ToRk0M4$qliJ$*_hU_dcVMq>TE};%je<+rz' );
define( 'NONCE_SALT',       'E<TP3;KWt<m0k&2uGHe@OU1i/WH@@ m:L/RNBEHh5;F~B0tVWP=@Z7tdm(o>mUY7' );

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
