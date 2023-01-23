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
define( 'DB_NAME', 'web-personal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'R@F;zpYZ<A&horbJXU?^RtvwRHKB_$emMerDZz U!lZqiHzAJq07zFe4`#M7Yg9k' );
define( 'SECURE_AUTH_KEY',  '#^@<UVAx26sg{oi`j@K3 f 3WA^Qc3BqCJe+~9qjwUQsMGSc]U6el_A<y,bBRkf?' );
define( 'LOGGED_IN_KEY',    'S0zb[Iri,b8e7O&tg& +9##Zx69HCoX7kS`Ge[ns9/E/@nt|k@sa*{Bfo3sXz,zr' );
define( 'NONCE_KEY',        '-T){Owa}lL*vxNdKuN8`YQ(hzYsw/qwpb><a7JL@9+[e `I}r;es}u_mLTL]eU39' );
define( 'AUTH_SALT',        'IKzOu/m<PwK|(NVnoPJ9ohbh-TW|z9E=eKg1|0{;vmo8Uj@AD$b+ZQexZ}xOR-![' );
define( 'SECURE_AUTH_SALT', '.bUphSR!qGs/^79?NQ?5ScCslG;-8AD4yUF>T_o_/t+C&,dQiB9V%rHfT;XgadMg' );
define( 'LOGGED_IN_SALT',   'N~FwWw3Ag.~FKm;J5lbyU6r,0*=OM|=Pl)7)1&te9s:;x@9_;Tw[M+.E+;I@bh)O' );
define( 'NONCE_SALT',       'cq7[aS[hm|XRdO-1a> d,XfL)4p#UaK&B_k_rDIB9{uUeL| dS9#{KL~6[L??9mx' );

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
