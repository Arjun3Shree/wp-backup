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
define( 'DB_NAME', 'copy' );

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
define( 'AUTH_KEY',         'N]+{^@:QyS6^&:[GQWb.`4H&#}ATPrGa 5^`(wnV`jU)1KG_c3@9E[+&O{%/sQH#' );
define( 'SECURE_AUTH_KEY',  '3p>3n`;YVcYW7o@.HT[=Dyj+6sVo7*EH;HrTFZL*IWv?fYa()|]n/Nk>!Z0xYot$' );
define( 'LOGGED_IN_KEY',    'b}0U5BWAfA=$G h_}d6L+vhi>dcjoc#w.8}vfByDy+$S$==#YG^I7cl[mk09N5J!' );
define( 'NONCE_KEY',        'U  ,:gi9gYpFYyge4![Wh!G$M]mGUH>fhx@CGA>tM~OO380xBY-vdrs-}ArO8Lc{' );
define( 'AUTH_SALT',        'E^<}Lf2i?vmuO $:lV Y<b(BRWOi!Dr0}v;u6t{#Tj5VrwiQ`:jxF19FEIM;8vm:' );
define( 'SECURE_AUTH_SALT', 'BF:3*9FP_mlqt7w^i-&W.Nvd~a*MV_qa9@C$5Q|s?nL;G;l=EOY<NL2GY7H*(th]' );
define( 'LOGGED_IN_SALT',   '^e_R:^#-FxC?LYbl`j7LM HUEag<H1=B:RHq ):THoaPl(T^:q*|(mVQJI9[kdys' );
define( 'NONCE_SALT',       'c1WI/HB8k0k5/<kVmhHyXKQ^7m0=J~rHf_i(LOPNEb1NP{)`7Sj<*&K;1C1BF]ZF' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
