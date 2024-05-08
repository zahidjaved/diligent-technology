<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'diligentwebsite' );

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
define( 'AUTH_KEY',         'Vp48[Sjf[pCbG/c?4Z>r(W?SHOQ~|}8!Q^jN{zC3g@x./5z}+dS((cd%-i!y0QC{' );
define( 'SECURE_AUTH_KEY',  'M Sjz9B:#;+9|GMjL~K,QI}4nT@|E|jSB Y*Yq0`S/=0XW`|%)zEvpCV{dTO[z8r' );
define( 'LOGGED_IN_KEY',    '6^*Z5klfaX3baPOTfLcezve#vxLjH+-]z9YX-Bi{~~qjm68no0VVvPRtaxSN|g=A' );
define( 'NONCE_KEY',        'aY2Q7]ybqsjC6mEkr(v:Xxdd#rMh_2QU__YYUNQ;+,V3Q:B(+{tl1oW%0`~qY$D6' );
define( 'AUTH_SALT',        '+@lgz3}WICoIk[[.R%qZ 5d+e?<e$KALBq149O5rOtAH7]2)$^A;Go<>GmEZ`k7C' );
define( 'SECURE_AUTH_SALT', 'ucuQ2LgSBCU:ue)6hB]@GvAT50]UP79]/D:UgHZ~P[uLYC7To}6J?_/J!7wp(<^P' );
define( 'LOGGED_IN_SALT',   '!w)eA5=GFK,y64OqRFNTl0Rlr@&q?9/0xrnuKt1?Io|%[4V[I|8B_bplGV7<Wp#t' );
define( 'NONCE_SALT',       'n2r:1j#jr&1W+*$nH?-5MqM@C1,1m9RaM!Sxe54C+?Y1AQZgCwe>--Xu_[M!~wG=' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
