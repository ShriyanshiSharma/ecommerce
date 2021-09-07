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
define( 'DB_NAME', 'wpcommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7PSzuK8g[o}y2r%CYv+w7>J%&jX*Y}0@#D@!YtEMd^|<cl[!@ <{*ob2!Xtq.WuN' );
define( 'SECURE_AUTH_KEY',  '.u=nZH%jH{IGEZ51^~j#.^N0FH%*Fmzzlw~vy4val0C7/zWh>2+!_X*^7+mwMTM(' );
define( 'LOGGED_IN_KEY',    '+&7`Vsh>a0(@hQIQIx,NE_kA.EV&)LA4a$r{y>~F!l 8Q;vEY@AFH++%W:4=00i`' );
define( 'NONCE_KEY',        'AnJ3q?sYrtIZ:13`kB4f{+r=LPln IJt7.@_wva?vuzTx4UKEVKp>?(e6(c!s;Q8' );
define( 'AUTH_SALT',        '@(}P~Z:S?D1*2MPyg,V[xLnP!|LYI^U.e!m`3{f4dUbt,l3Z}8FOFe|oJNA#oDs`' );
define( 'SECURE_AUTH_SALT', '+W_=;.1[m04:n_R/`Ls44UQU0[yE<s`(n@[sX`&D*WJ^IbPi=Qg]bW~/aCmXs#kb' );
define( 'LOGGED_IN_SALT',   ']L~hP^:-!H#a*P{X?T(2KZDYa=4R(B~9DxG$o,lPt35kZ.X_F}:}n_T<`~?i8Zq_' );
define( 'NONCE_SALT',       '_`%d|-@CYV+T.lQTk^%/peF@-a).{qj{,5fpJT?d9b~1gW.x|7_zp8f[O?#ve_J-' );

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
