<?php
define( 'WP_CACHE', true ); // WP-Optimize Cache
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
define( 'DB_NAME', "u338675586_wp_flow_ltd" );
/** Database username */
define( 'DB_USER', "u338675586_flow_ltd" );
/** Database password */
define( 'DB_PASSWORD', "Flow-ltd1234" );
/** Database hostname */
define( 'DB_HOST', "localhost" );
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
define( 'AUTH_KEY',         '@tB3;>lx(&HK7x_H0x$Hzxq0bHgBb_^q*~deX5h59B*oIFtI0%,k]8r@{+z3v&Gz' );
define( 'SECURE_AUTH_KEY',  'LMvD`1aTI:5NneGuTBRo9(,n>.pnx&8&>5brm)h$o&):T/xJ.,Ocyk=D|nz[8u+=' );
define( 'LOGGED_IN_KEY',    'o9lV[Fdz)3B;|Lu%HY^KlJe[6(zFb=I|h#JB /f=5es`GupcruiKSDiKqCBgAaM#' );
define( 'NONCE_KEY',        'Jb4=3Q[KtGirCAJVWoFitKm*b7_xxe Dg>EXF;pP{/+Y`3hg(W{}5EGP>J4!498r' );
define( 'AUTH_SALT',        ':-sXcbi|7{gF$[NYVidCV-K@x+u=}22,70UshV[T+qg}b;@SkUHlRVxByM]>Dd!-' );
define( 'SECURE_AUTH_SALT', 'v~L,h^0+oup>K66)7DwT[mu>Ao4]VDi7Hk@su(2m+C*C^?ji9S6xpn7hIabf;9}d' );
define( 'LOGGED_IN_SALT',   '#7HM;4Y=WU4Pb33qoHel(4K<>/`9mU=)}G#.@$.iNQ%:.PbT7#7dw=OdT9}5dE~^' );
define( 'NONCE_SALT',       'L,bS#+cm<<Xx$=!t6Bq8do:43vW/n(R<`*&fV.AZNs-+E!`w:rPP,z @8~qdXC2P' );
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
define( 'WP_SITEURL', 'https://flow-ltd.net/public/blog' );
define( 'WP_CONTENT_URL', 'https://flow-ltd.net/public/blog/wp-content' );
define( 'WP_PLUGIN_URL', 'https://flow-ltd.net/public/blog/wp-content/plugins' );
define( 'WPMU_PLUGIN_URL', 'https://flow-ltd.net/public/blog/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';