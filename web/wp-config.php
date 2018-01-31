<?php
/*
 * Don't show deprecations
 */
error_reporting( E_ALL ^ E_DEPRECATED );

/**
 * Set root path
 */
$rootPath = realpath( __DIR__ . '/..' );

/**
 * Include the Composer autoload
 */
require_once( $rootPath . '/vendor/autoload.php' );


$site_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
define( 'WP_HOME', $site_url );
define( 'WP_SITEURL', $site_url . 'wp/' );



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
define('DB_NAME', 'qss_math');

/** MySQL database username */
define('DB_USER', 'qss_math');

/** MySQL database password */
define('DB_PASSWORD', 'qss_math');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>E3J5zk$ELs]UW0+&`}4*G[OUQNd +5jJ:xjUJYy6P)2C!/>+4!daZ`C!b2=p#>f');
define('SECURE_AUTH_KEY',  '.*#=:B-!|7qa$TpH0l$x0l6:i|Wj83*}$EO+o&h9U_bGcqr>,8di-E&+q.3d P+$');
define('LOGGED_IN_KEY',    'v;`b&<0i2)HG+$xwIAQe`1lv+b+$tDC3g9;^L+{@7_whWB)OfsWk5f,9Z+<NhhL2');
define('NONCE_KEY',        'p+|oU!|jP(^;NLGH5iO?}BP8HQY3#G5A(?O-&<Rw~y(+989^;?.{gWy1uzIgjcXl');
define('AUTH_SALT',        'y%zObt7V2dTjmZ_lBuOz*QA{!b?uXG>ii ccRcA&bzaT3tmBR)Y=*!,~ev+vDgzP');
define('SECURE_AUTH_SALT', 'NFCPKGV`|+r#I@i{~i]|~+sVy-Tt.9ZU|=PXCKDIu?tkM4a5gxx/T9 1|Qj! ..+');
define('LOGGED_IN_SALT',   '0VtkG2f`+@NwJih(A8$H?,!VTO.R*dBocl[rv3AQ8<K/x]8b5E^sZIMuE<X%zJ&E');
define('NONCE_SALT',       '7<:+v[:k|]<0`zpl$j$!J2EOmu7S}O2+Bx0y(/{-tI Ct#1Q*StZynijz*D<zzc#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
#define('WP_DEBUG', true );
#define('ISLOCAL', true );

/* That's all, stop editing! Happy blogging. */

/*
* Define wp-content directory outside of WordPress core directory
*/
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv( 'DB_PREFIX' ) !== false ? getenv( 'DB_PREFIX' ) : 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
