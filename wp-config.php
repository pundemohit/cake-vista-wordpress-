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
define( 'DB_NAME', 'cakevista' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'EuktED6vQnEP^,&x{GZP lbtiH~aN$m^i8y(O1{U&m4~dm[Ze!)SC,Ch dkY*e5/' );
define( 'SECURE_AUTH_KEY',  ',Cv48_$TRdZ[!j|S~tmz<gw4p:eBh$iX9=Mhp{5{i)b%dI@#P^7bL|7,9{n/`G!@' );
define( 'LOGGED_IN_KEY',    '-ZwL6IEgPO1#d;qtda8?A;3Qk8hV5yE%QH]3uUPnl}Q@+tLicbQpv?/2DjQ.$bEd' );
define( 'NONCE_KEY',        'J(etC@I7Pud$0~m?y<&k3Y4H$p1xCx]Bfc*m6++t]>xC??|AcLUYyx$GF,jxi _c' );
define( 'AUTH_SALT',        'q=qDuv^z{db9wG@E(Q+sbdF`iGNlJ<-IbUYA-~g*AnIK@S|xwz_#7E{8&Q:5jFe?' );
define( 'SECURE_AUTH_SALT', '}Jx]?Os6!@pQj#OA6{]0xu51g~xEneg9D;gMT/uNZfsZe)?k1jMOTtB)PpFN%GWI' );
define( 'LOGGED_IN_SALT',   '8@ 6s%W6sd^{;$MFu?k~814#yA4C{F%MtDp^#,JkgNfr5HYFOh?<uOdpbULWYtkC' );
define( 'NONCE_SALT',       'kNzH_fWR>qw5DniVyg<Al`)B{)HaO&kV3Y,g1|5+RhF+U]dwGM Xk$Op[:RKLypy' );

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
