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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitewordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o&ww[3|DZg6{~jVkV]zS=#QPg-/RvTcAQc$}wixND<V?$+2RS/f4.(Kh@HPO0=L~' );
define( 'SECURE_AUTH_KEY',  '$[/tb*D[PxP.*dMdZm$?6K!t>nq4{S*EdPV<ekL;P!9AV?!:$};HKrbmnY8vWWbH' );
define( 'LOGGED_IN_KEY',    'V4wNLl1vCbOw<<MG&`0&%!`/yRTJoV{9+Y2qiJ:Kpm(tTt)2gs{-5X(E2JQ1!h+3' );
define( 'NONCE_KEY',        '@>NGDXVcPX$X)TZIJE#Zh~9ik2D60=gl*hV1BEaPXU`+ 8>7d4o28xz?ar.tW4f*' );
define( 'AUTH_SALT',        'cV}wp7XH}N1 QaW/Kxaf2^K}JeVAUR!s^pP!I%A(2mypzD5MGKe2IrA>>4s%>ZU7' );
define( 'SECURE_AUTH_SALT', '!8|qZRnlK1ZoOGn<S-)-y(S]z^k1gWcf=o49&}B*16pJE-OP6IP5BK+-aw7f${H1' );
define( 'LOGGED_IN_SALT',   '.Fm@k>>NN:)a|M[xfkvKBsFznA5k+^u/E97D.WAC~?88l6,C;|_QIWx8*$;e55T,' );
define( 'NONCE_SALT',       '<USYaCcRclloZt6x/Y$^o]Yd[o}A;tp]!!YHK5Pb73kDV#?zaNx56Y1oW#q8VV%4' );

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
