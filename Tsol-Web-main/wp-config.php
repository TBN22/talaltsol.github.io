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
define( 'DB_NAME', 'tsol' );

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
define( 'AUTH_KEY',         'U5nw<]#54ptt[8hre:Eu@hfZzUb`F@@NVh{#@s~B.vUKmvIalZxN389wlB|}6g<#' );
define( 'SECURE_AUTH_KEY',  'oE&pN~Kg!vaLQ<_,5n2br9iuqK9t0:WWH=CL!v<X2g eT?o6kVf{b57q[JH$YPqX' );
define( 'LOGGED_IN_KEY',    'G}T:S`eJBB,YXS/.4Xy,ZR%-y`h;@tEi XkS*g{B?jhm1EeTs-([xK>ef`,a&BjQ' );
define( 'NONCE_KEY',        ']z5c{%)xO+]bI_WWB6N]/&3a|U5pK6PAp@C<Ndzm{]-!fyk*ak3Yb>M)Mh.Es6AL' );
define( 'AUTH_SALT',        '[%25[#Xz;j#bh;4,^L-,#4$rf,U/#Vd:iQBB9)px(#f,d}qy&A_:*GC6;M=PUsqv' );
define( 'SECURE_AUTH_SALT', 'FpJCF[aX97C@oKYT`:P<v^_z6$~Mi!P$w]Dnq9Mbo29j=T7],MP&I KNbn]L/Rjy' );
define( 'LOGGED_IN_SALT',   'GVI%[caj1&g;er{owDarsZgItTQvF!Or*p<6S;x>?`*_D3G;L$nEk#Xl4_v(Ap?+' );
define( 'NONCE_SALT',       'k^z6.|aj_fKWkpw.).{V.hGh7WX<G]0L7fj$}$=y|`u{-fz_|K7S.g:OX]pL.lEf' );

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
