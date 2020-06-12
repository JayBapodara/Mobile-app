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
define( 'DB_NAME', 'Woocommerce' );

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
define( 'AUTH_KEY',         'W,0U~-]L,6r[_<#.,^.r^KMO7tP c@t^a1~9j<Rn#VzYL|,}e>)dkOeE0n!%h5_K' );
define( 'SECURE_AUTH_KEY',  'P*|yhZ*}Uzy=OGxOJLc?wP3og0TVN^iVNX{#ad /%8[C9D!UC,sJ;:l/z@1m1n6F' );
define( 'LOGGED_IN_KEY',    'A/,V{xq_Q2BYyMv]sJlThf>aO6W}F1ni7>FDxS}iaM@/YAU4yJrq[{C@dk8DnQJ;' );
define( 'NONCE_KEY',        'W,yYKMjuE#:o5;PJB%]nw-w2n2$%M7S(FE1@,BU-Hn#weq>Ki(;}oM$H_)2eqsZR' );
define( 'AUTH_SALT',        'Snc{3l3rE+70| 2@HG0^/>xj21qr<HV!*(07JfA1+%d;[*&0Vz>EJ)0rjYO0{mUY' );
define( 'SECURE_AUTH_SALT', 'EgA$v:wY2cD=Vm5~;[Ji(=?iy2uy}!r=3$7 -([RVPI J6<[R3hYQYJ2T&DX-@7K' );
define( 'LOGGED_IN_SALT',   '|d^S<N6|8jP4QPF%q%j>Z :wrBhMiC1zk%cM$Y+mU~w$g9klie@-^-M7O{/=OPk(' );
define( 'NONCE_SALT',       '7rP?TY,bg$<Ty@GW@(ylg3@rEP0:=kNC}a]H1YB.]d&fPo@@-lxNpy|3`_0FO:%c' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
