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
define( 'DB_NAME', 'My DB' );

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
define( 'AUTH_KEY',         'L.WW(e._?v1s=C.Cc,OHUvUr_VsZoX96J&(RZNI.6ikMS|/sB3S+fN>52qetim~(' );
define( 'SECURE_AUTH_KEY',  'zcKYQ{)$4k]%V|~XWvOACM`&dVF)%by4.Bun8_6WMsC{;7yQLYPph%(0*t`5#G)q' );
define( 'LOGGED_IN_KEY',    'HA@vyz^^(,0E0Slw>gQCm1Z^S1KUVt}%>v%NJW7i#dlR9&5+wNj ;Izg[1D%iN1d' );
define( 'NONCE_KEY',        '8vxmNLaMg?Ia5{>*nS|cHM&?z7>!nWw*z.bJg-H90!.86#Vq~xvSI2$NiSM4eAy&' );
define( 'AUTH_SALT',        'ftJiErbIq=n]2@V5x[|r<iNYRa2voW.Q|QhyuR^Cva%~mxVd}.X>~fgwuy?bK4F=' );
define( 'SECURE_AUTH_SALT', '+j]_M&(FF,H!dv=E>#{H)u-glelBb.uv%KM6tsirj4dHcaO1E EK4<G4Ua^Yoj$<' );
define( 'LOGGED_IN_SALT',   '4].$qPWp,RL7#b%%feGRz9|Cg(~m~~=r@wkL9458SF&RP8sek!]UhYA1~YX;v X.' );
define( 'NONCE_SALT',       '(%A7e]QNQo3gY/WrsxNCJXlVK7b(#JGm#kNzPKvQJeL_G^rQ?_QL`UO(5^vq^4eS' );

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
