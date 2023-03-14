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
define( 'DB_NAME', 'zt' );

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
define( 'AUTH_KEY',         'DV+8qr<8q-:{<q*oW(MUM4g%[d?/_vs@pMf4u[kIT={T3LQW=R?Wc!A5Vd},09L_' );
define( 'SECURE_AUTH_KEY',  'gU~iTNr`8S9uE8;+Co<^WA{y{%BXujexI@MgwF7Sur>_5Ejf|>Z[QN4N[9?2q$jl' );
define( 'LOGGED_IN_KEY',    ',en{,I/v,OuserRU&nxM1yq[D/j/^w=$<(=MM(G(lr@+%Y]D,@JrmMs aEe`cr9t' );
define( 'NONCE_KEY',        '>ETIplf2DCS~Vnsn{tZnp7b%`@%RSY&k33>|V%bmq:EcL&F`~(@#!}i|#+YqP2)V' );
define( 'AUTH_SALT',        'i|K*jRG;,&NDtXL`=kI~jlGW!X2bIsNTb%zp {;p:y~rRa_gIN|L}a&a{E4seQ?]' );
define( 'SECURE_AUTH_SALT', ')Eo,[>7k]|9>iD&(,@4^bG^ChaI0Xw4zD*-]%rEmn:ToM<6G-0QT} $W^NIR^o~g' );
define( 'LOGGED_IN_SALT',   '<2q FX^*m8TKziAeb5da3spj,ty.HKmhDS|6wu-Bv,-.ljiaW7q M>PVyNqimf#T' );
define( 'NONCE_SALT',       '4^5lw,b;Qi-~1q{-~3>{!a0[-[7.ITX8)g8NtJ,*mWC(uru5Hg9c]_yud xQCncC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zi';

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
