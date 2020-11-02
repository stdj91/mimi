<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mimitDB2ujpm');

/** MySQL database username */
define( 'DB_USER', 'mimitDB2ujpm');

/** MySQL database password */
define( 'DB_PASSWORD', 'mdtqOztLF');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'v@yj7$QM^nib{M6jnY}^U3nY3<bfQ>yM{+mD;2mW;*a9ti5#aeP*qE.XI*qLPqte');
define( 'SECURE_AUTH_KEY', 'Imd9:hS-xG1pZ:~_WGxi6+PDximH1pa;tH2!wJ48sg4|gFzoCF0kV|w8[dS|wRVG~');
define( 'LOGGED_IN_KEY', 's1O8@oC}gkV[@K5dO_wK59-oC:VG-pYcM^rJ4cN}$QB$c0^NBvzk8}gR!rF4orc0!');
define( 'NONCE_KEY', '[kJ4o|vQUFznB}gFsc4|[dN!wR0kV}zRCF.XI$b,fiT<yQAjT^vI37rc3,UEyjB');
define( 'AUTH_SALT', 'XrnB{fF^uI3nqb,QBjU>@QUF^vI3cM^v9D;iT]+D;te25#aP_i;*TI+*qE2te<xL');
define( 'SECURE_AUTH_SALT', '#-5pae2#PExi{+PE*pDH2qa;tdO!wKO8shC:VG@oCG1dS#w9]hS:~_WK~p1_rg4,>');
define( 'LOGGED_IN_SALT', 'o#tH1pa_~O9th5#]dO8}gFzkC}nYc0,Y7rc:@RVG@oC!cN|wzN8sgQjU{$QUE^uI');
define( 'NONCE_SALT', 'z8Z:@nrb,YI$n7<fQ,>yM7nY!rJ4oY37}gQzj7>A{mX{$Euxi6<eP.i,XbM^u');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
