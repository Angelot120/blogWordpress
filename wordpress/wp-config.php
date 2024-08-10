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
define( 'DB_NAME', 'blogfollio' );

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
define( 'AUTH_KEY',         'DS`GgwFtAdX?3yjL2&6%70lb=WU/b[(*DDk.2F9m0%g[d-_13oPHQ+s>sbK<,wn~' );
define( 'SECURE_AUTH_KEY',  '@qt=GAVu9g7ztrs(tqAr@E 2>||K3JUe.9EN5t_CP_b~B9 sul1~bR.!-@Apw=rV' );
define( 'LOGGED_IN_KEY',    'e4SUCC(yFi+GJ,,h3`yrfdb9VS0Zopb%DAa?#X8@D0UOq*u:zHK%*cfA6?&VtVK^' );
define( 'NONCE_KEY',        'ZkZ?t_crU}_@_Q9Iqx?~Qr 0{b2,j1w]%P5~Pi[d<hhf,Vl/84WTViRSzS[%)<Ae' );
define( 'AUTH_SALT',        'RKhft+,=2{tI^T]PW)c^z<E+B)x,e%@}yPQHeIS87vZYPEl&dJn@~;;qT_`&0Il}' );
define( 'SECURE_AUTH_SALT', 'Zw|oOs&5!_#eCh?MR>Vv~U5*_4fc4:n^5Rg;g_}x~92oC41U76)9SI&A6&<{GqwE' );
define( 'LOGGED_IN_SALT',   'se,~/qsWn,u$#fGa#QL#n9.njF8(h% gX2qe- U16+0VaNofJ>Q-f<=ALg?`!fwF' );
define( 'NONCE_SALT',       'z=eVq|G(6)P>s5zzu9sNH_d#JX+Sbk1I3Nsfjw)(@o/%y-6zp,yvJrv9nCdDCEus' );

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
