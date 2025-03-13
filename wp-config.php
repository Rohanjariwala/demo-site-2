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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo-site-2' );

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
define( 'AUTH_KEY',         'h]AqX=G-9@&#>=;qqw&64j1[fF&F+r_@q(s(N.)@?LT>z-!=+oIB9CDXF+De9n@;' );
define( 'SECURE_AUTH_KEY',  ',8dK7!Es^08<#Dn0a ?.k6OQrTWPE6=` B$zKRb.4*G,d+[!01tcof5nk$=}u6@$' );
define( 'LOGGED_IN_KEY',    '8=1-%+gHz?35HbOV%5l{,v)#c Ax@V^+54!o@o@mES-&t{j4n`2ZWOciqdv[%K`D' );
define( 'NONCE_KEY',        'w,6s`(b4u}+pL:MUby1Y:Pf}4hx:m=93((<kb)Pt,Ul%y#JKeR(x2ohQ,Tmrk4Qx' );
define( 'AUTH_SALT',        '|Sp<dZ8<N.y+TZD!q]&;RVUr}j;OR|oBD-d4y149k^b}ff*A<YRaj4VIT> i17hP' );
define( 'SECURE_AUTH_SALT', ';[|5T ao&g^Hu3w1?JE6,@[IxgjTS3?xZjVYhCtwAR^.SoH0|Z~n`scV;Yv&i$F$' );
define( 'LOGGED_IN_SALT',   'i1],2k`J)<}/XE*;|UyitZ&x{5MYD,4pl87EHJ<|AoYjv9p|<73K05`x#-R)F]P;' );
define( 'NONCE_SALT',       'pL/+Xm5uJ8c~6/y@7|=B!1Yj._9U7-|``(veu44Lk*>j?UR=<yeU2,7<)<Ep?7PB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


ini_set('max_execution_time', 300);