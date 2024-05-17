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
define( 'DB_NAME', 'gkictsolutiondb' );

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
define( 'AUTH_KEY',         'wB^kWfVNoY),GsjmGzPC9u[-t=4:,]mXEq~dPyJ3IJ/=enB.Z2LSs<$]MN]>!er6' );
define( 'SECURE_AUTH_KEY',  'ZomW?Z.kR}cY;u<^;Jrp87S^<3_DzYC3rY:hK;hP6P&gUF>|e6^-7x:C%Ur:1W!|' );
define( 'LOGGED_IN_KEY',    'j]Qr95GquO{-eIsghyu*^XH@Vw?_(:E[c)/KXnE5g7AC4D+KX[:TI&h_d8D=@?lP' );
define( 'NONCE_KEY',        'Rwl.ZKK]V 9,kTCOVVZ8?(ZSII,|7p>H)Zw<xgD4EV<*PwCzkNox,e3R&jTXSP*S' );
define( 'AUTH_SALT',        'Bu8RF |nZ].MBB;ASX^dyHr Y:EBuig@?49&zIU2f@AcELF5VKMx<tu0CUTAc50%' );
define( 'SECURE_AUTH_SALT', 'bL3XPc$#p9A8>u*|7mc;DeLdkGwzT=mo+Ke:}-PC8!zE=Pp=GBza:~.xWs<I,K%f' );
define( 'LOGGED_IN_SALT',   'RDjSD~c5D>A0#p!/JX Y(V9rGW<f%F3qA_R*:mjjbe+aob,rB{fgb{J8|Y,K`*Hy' );
define( 'NONCE_SALT',       'Xq:1Y(471S*>DEMP=TQFu R[*B5MTo}0p~. aV!x)d`MM(;)![y/U4.T8F2(;<n,' );

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
