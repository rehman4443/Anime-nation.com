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
define( 'DB_NAME', 'a' );

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
define( 'AUTH_KEY',         'c<q]3Xbae4&Tf o(3=!Sdb1C3=/eN~=7Q^EC2Kh~&1UDf1KE&GH#i^GfyC@R<Pe[' );
define( 'SECURE_AUTH_KEY',  'xwE;/(hZz4?w/SG4aP&RqE#!@WKu^)MZhDtO6`;EvOp7Od~xv>`80;C`!qA*kuF!' );
define( 'LOGGED_IN_KEY',    'mv]]lm]#Voq>)Lh>}P1Y(el=9KJ(-7FTeoA2gidYi*3VJ_2&?n`a( [WAF8weW*l' );
define( 'NONCE_KEY',        'GnyI1D1bvS7<GhuWQ44Uln&n7j7R}0aiB7|cVdK u;g4r*/xGK7,*^ ACe^OfIp.' );
define( 'AUTH_SALT',        '/0]c*-K8XsI1^{,P|0 }XNBvoNaO{$R% :fKO~%O+DNK=cx%fA[uy~Fyr65_-1Jg' );
define( 'SECURE_AUTH_SALT', 'MaMWozSS$D;<(mBp;Ex&|EH&eUG(K`uV=!@yo8}eSf<k7=H{z?_tr=+:=*cAa8Kc' );
define( 'LOGGED_IN_SALT',   'FmlkD])o^;C$=<HiN1K}qi$+=o*RxPrN[tWg&y@.%PQ]f4Tea5u9h/q- 0NX,Tmf' );
define( 'NONCE_SALT',       'X`1we7nT<0z=<3D1P@5@FcQ,;th2?ja2N&s%QFfsxWskl:!=+E&Rdw*3SdlWpa^n' );

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
