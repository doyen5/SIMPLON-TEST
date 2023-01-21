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
define( 'DB_NAME', 'wqlv4270_wp800' );

/** Database username */
define( 'DB_USER', 'wqlv4270_wp800' );

/** Database password */
define( 'DB_PASSWORD', 'Z3Sm(06Y!p' );

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
define( 'AUTH_KEY',         '9cdkkp1hyvmmlc07iaevvmefh7vewyqok60dgvdky1petm0jsbbupf9trbmwrndm' );
define( 'SECURE_AUTH_KEY',  'k1wgl5kf6sr3ffa7azezfqofi6xesjepgzius4toxkbusa31fqu7xsnovncubebs' );
define( 'LOGGED_IN_KEY',    'vnsg3dpkgsuvxe1br6aapwyrutcnp0dpr2gt3ivyci5efy4jbp75ns6ggo8smcxw' );
define( 'NONCE_KEY',        '7u18rv128lepvvwhdqg292pt7htuq429dkut80grdtvvraiqqdq2r1i4hbsnbypb' );
define( 'AUTH_SALT',        '0gxqugegqggicyf06mecqwn3flvlqkbqyjyuzhabfx2lgnroejk6qd5m9jrnhshq' );
define( 'SECURE_AUTH_SALT', 'b3h22phllmuguapnuz9kqamxifo0vulxqeitbvfu3gxcqjpv4fdnk6lysllbculw' );
define( 'LOGGED_IN_SALT',   '8dydx9ybynxbklhnuofoytut2frn0ddys6mou8nelfd3wf4wvk17ppyloirxxt2g' );
define( 'NONCE_SALT',       '4j61mqrprdoxzygiln78phmcm9mozxxh1zzflznx6wccqwpww3yfrhm3vod7rplz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq9_';

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
