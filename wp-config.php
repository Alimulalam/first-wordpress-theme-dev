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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WebDev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'wv6{^[hV.I7s 3J}fNSr2rpf%1gMFGq$sZw+Ixht1`f~-kYiVOMYb]Lb>|/~m9K.' );
define( 'SECURE_AUTH_KEY',  'xX-`oO&iH<w5#IvI?rcMr RS^ p 63h6>[6V6mXPU:7kgk_G8zoxAB$o7*cQl;2%' );
define( 'LOGGED_IN_KEY',    's@.^Q <[K&SZGx3@W,-^NTh88,fpp/zlqGTV_6^}GGy{,g&L1Y1Sl:QL}b*KaL)Y' );
define( 'NONCE_KEY',        'aH/?|_]UmvV72>;Yljy-PAjjU].}sdPer.y37f`rsd7gtt1rL#9Dp#W)=?H:rXRp' );
define( 'AUTH_SALT',        'nPWt(/@Jqy?Djbs*Gz[-eb4YTG5EXl7WQ2TNQg!Kzzic!wc~IRkF9T`Iu~EV{51Y' );
define( 'SECURE_AUTH_SALT', 'rio!2d?Qy<6&^b};6b-q/ovk!OL%xX%NFKy`Wi4rDn-kCWKCI3+ XJ{.,0*EmzP7' );
define( 'LOGGED_IN_SALT',   '5Y!AmF_08yo-FJI8emcJB+V#}SG@5-fkLcvw)S/0!S<+FUhiY3!!6=Gz|CiJC~hY' );
define( 'NONCE_SALT',       'g?I?kaRr?f@uNnK^TxcG]=O~]lH]{n^8#M}^2,Xju7zNkHb;$31P-;dwj6] 07(O' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
