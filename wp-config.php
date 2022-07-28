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
define( 'DB_NAME', 'zigmaads' );

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
define( 'AUTH_KEY',         'kIC~GQ%rE Y[RewYQ>u3p)W,HoRN,Ip/jAdgv8XXnLhJF6rl1Knx^0rLNzt#uTjt' );
define( 'SECURE_AUTH_KEY',  '@UD0^sY6Veo#=on{-{~j9|f? bwPBof#}[xn%G8m(HFuHaJ&n ~$>9/s?h&N`$[C' );
define( 'LOGGED_IN_KEY',    ';|5m7B`o=1*G0-h>!!Bpdo_2YNJl;bP]f6a[];2f%q7x$.LVK1Hgc.s)<h8K^fI*' );
define( 'NONCE_KEY',        'LZ>iLcbHx&N}$0p>2Se#pcQVQKWL}A||+9h|5#Q4P]}&gU``)_=I>X}p#YSxd_xY' );
define( 'AUTH_SALT',        '+Yj~I2zBEn~p/Vi10;eixobmL%TbXqDaMZDfuC%yT*7Mh`a1#OH2jrA>tGiMF7tF' );
define( 'SECURE_AUTH_SALT', 'zHFPg[&xnE*-(/sc.s>->v]z[/Z3KkoA*5 xhl-ey)EtuSw>Z=C`l,k1tc!>bLcS' );
define( 'LOGGED_IN_SALT',   'Rb>s[SU;j]:M0-aw9msU@[_;~zHv4?;@THm0RsIa}%x6{mzDKB;:g[8YP^oyf@cs' );
define( 'NONCE_SALT',       '8ZL+{*iL-m}+WK:Pg2r|@32.X7hfB8Y}5uTP!aGaCYzN5:7|iCWcMIj+vzpiIIk_' );

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
