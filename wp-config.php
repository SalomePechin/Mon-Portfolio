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
define( 'DB_NAME', 'mon_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Figaropoupette&1' );

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
define( 'AUTH_KEY',         'wift9pXWP;,&JXrp]lV8}/T!sy_jye,_Fi&!9zCT?SPFAth>@jf%3saGd*ZMWW!d' );
define( 'SECURE_AUTH_KEY',  'X[gE`aD/)TTVnB5E`zt[YJ!Mtrp,o$N$Bb.~cVvSvFe>@.nUS$-%^so#/[uKq%)=' );
define( 'LOGGED_IN_KEY',    'l<4.oU~-$wt) `8%I?)nE`SPF3lf|Qx1:&|1*,$kwOy1/4X;WxNLHvHu6?=5}D9t' );
define( 'NONCE_KEY',        '@A<~{Uo~x&`x)OI1,sR(q%&&kS({-A`)&VZQ 5<>KB~,m>fYU ]$KxN2KNs{gpH]' );
define( 'AUTH_SALT',        'kxaaG9dlx#D!Z/K;r4%8P3c{4MroeK}639lh>]|$PQH58/.Yl;icD)q@WK87@9ca' );
define( 'SECURE_AUTH_SALT', '#oRrK{`[b=G)=2D`(we3k|fm-H{vQ;Fwg+;}ZYRr+y[92~YHgluyUeVZr]h)}n:}' );
define( 'LOGGED_IN_SALT',   'VQ*{p7lQDw7TtBwM ,r5e{o?-(Y^T# *3+$)TRHhi9s Wlv.V.}x&p M)2x<[Q.P' );
define( 'NONCE_SALT',       'jY>gs=hx_amgHO/,Vh!-RM$l;6h%!<E,gJ5V>|qRKW}F}:8QJH:Bp%ILJg(5<rOv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
