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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'P#6x]s2sGee0Mn!{x6&^2h:Sj=Q|6Nd)b%(9GC7Y<5Ee)nE-wer3$dzAZw9SJsz3' );
define( 'SECURE_AUTH_KEY',  '5an)&x_k_p@]!e-g=N2(gu5fr2Y6Lk7ZH1g0tejaxsO+Fq_8[(IU`,bA0`q)E2tn' );
define( 'LOGGED_IN_KEY',    '8`310n|+7;JrDM{!W<pOPach+sZ+|){:jo}njr0$U^+~)_QDhint.n7z2R}A.eZ&' );
define( 'NONCE_KEY',        ';#]BK;y5jhU[AX`X:BA3QI5JWph$!}2Yhc*V|oywOKJ_t*Te%f5/i{)W7{1L)1/d' );
define( 'AUTH_SALT',        '%&pVDnE/*TV47dEh0t{C5kJ`L>9DmC6Wdei+ )9(/nAc+F#pc8ScJm#ic$x,L+G[' );
define( 'SECURE_AUTH_SALT', ')WA#^k?2VMg7sA^3#~]NH%#3J0Zyf,ck4zz{rNI-f5-@:pTyecx#%|qB=?9/?.DD' );
define( 'LOGGED_IN_SALT',   'O gva-g>&ZS~YM(+me#VrC ~OU~?KvSPT7jk!mpBl%x=OGT<(Ha{n)rEXspy;+MX' );
define( 'NONCE_SALT',       '?#]N3uGD%K!%N#>sR>4op&d8He0KnP$kw/o%Y<OV+fVTU(1^twIqmhp_QOMlVVAU' );

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
