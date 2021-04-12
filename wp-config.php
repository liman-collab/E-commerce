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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Xt%q|uw@fW<2&5u`5>Nwu~}G,ka~ca.tt/zzg=8TN{DPy5Og6J^[Yx%N6bBe2T+%' );
define( 'SECURE_AUTH_KEY',  'N{Osq%I}}&rrKb*Qh=Ji6VaGmSH`tQ_)D46s[=uBNnK7{_3,s;k9e=%v$jt4vKQP' );
define( 'LOGGED_IN_KEY',    ')Jevci{2J{vB=*5ly;J}lV]~nqJR}iE;V[tDHb0-ZrSgvT2%nxLxrh]kgsXs-qxu' );
define( 'NONCE_KEY',        'bJ@2cnq@mVrsvOqS5+prd?&ns|Pr.q&|vM5T?a!fKEjXPQXBYhF93_GSlF>rUc=y' );
define( 'AUTH_SALT',        'H8GMk}>kvYmI^29V@hWPh_e^i_[.{[YVPDICBm0+3r[#(=O7fdT]t:!K+.DsP@V-' );
define( 'SECURE_AUTH_SALT', 'fp,Ynd[Ow7@~Wn!,4O;-[GCcS~Oa_i;&r!BE~8k0gFQPu2+Rvzx;iZOYmn9-KLvw' );
define( 'LOGGED_IN_SALT',   '?Mq$!kTMid F0b[!=V36D+jy37G]5SQiX73?BKK{vJ6y 48RS{=%0Z-/G(+bSN(.' );
define( 'NONCE_SALT',       'd7eOu! yG]?$GX(e<WywhS/#rx;?kGORyQX17o8!@alw|tURjjXYb*Q_Ic]LW[ZV' );

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
