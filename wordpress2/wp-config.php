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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':DW,6@P3<8r)IEb+@cjL3C-+Bz1:}%-#R2M0!5h z;?L9g:1.mQa$R;{1QVE$^.^' );
define( 'SECURE_AUTH_KEY',  'o.JLt?O1~BX}VWa8t@ 8%Cg*61..8!0WcY@?p+z-Ra;3+cGLrkH*~Q[zHwtZ7H:~' );
define( 'LOGGED_IN_KEY',    '8`in:]11nWVQTc);QuYiu`=$Vd?nHNSX]>K.bnwcgVT{Uq--hD&dzv_6)<hUhT0R' );
define( 'NONCE_KEY',        'HyTQ%Qp>xm8bfkt;JUCKNwO3*3dpSo$vY*k:Y08::]Pex8{]/XA^8YB=_6OAB@/5' );
define( 'AUTH_SALT',        'w}d>`($-+PP8X[zLj/HY_olQslTjHH.$5dzd`*`SNa]yN]Kj>tO.)N{k,-?M6|}S' );
define( 'SECURE_AUTH_SALT', 'Dt[3CRM](Rc7N7?|>h{9ihp&[UVuKa<jU{R(VEf56#he+Yg+@pSuPRLPl`HYi; u' );
define( 'LOGGED_IN_SALT',   'n_:l^(nCx(:<+e0-#|hKdMWKl-s%=:-f[Ss$^eOX*PjyT&}Geu9jvgF?&w<p/}kE' );
define( 'NONCE_SALT',       ' N68[ zsM+~>Q6K(41W^]Wr+Q.,g/} cylY6tJ|Vs|TI@D7+q>l2$C|S|v}3Nn)2' );

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
