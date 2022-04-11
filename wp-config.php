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
define( 'DB_NAME', 'jazztownsville' );

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
define( 'AUTH_KEY',         'x#1x/a#m]<|3q.VWTADb:0L/)N*7bnt.>F${~2~,=#Tp(rL/#b2XQ|M$oNnQ7nRg' );
define( 'SECURE_AUTH_KEY',  'P27-R]RLvHw?*m,1M=NO]</fAOvGjf4W+f..!A0zfoy|t0%^8Zia1ZY[o8D+Hz@L' );
define( 'LOGGED_IN_KEY',    'Ao>2K&]+KHcr?:D|I6-5tjc+[GIh{xdhi8j[&b?))viMo$F3-%JB Axh%b@9,dw8' );
define( 'NONCE_KEY',        ',#2{Y?i[u_j=H;V5s%5edNPRt<~$!Q[4+15PV!mqn_GEHV=IP/*mJM[oHxEZqDiD' );
define( 'AUTH_SALT',        '^ft5n9Xc_Gf}{EIH*D(k^5-;:p.ZI^P-A8I[wvDz9o?C#peK3ILDqyqEV1+cCZJ?' );
define( 'SECURE_AUTH_SALT', '5TTLy>BXgQb_8j)b<*F>4hi ]TC!?tNW703U)EPcx!7(%y$k%Mv6gSmRgtSc$}YV' );
define( 'LOGGED_IN_SALT',   'N8jdD|YCaK9yixZ >!Q?vP9fL;{)y1NgV_/h_s&+u%)Gd>A6x!>DU2LH.T %B)N[' );
define( 'NONCE_SALT',       '(nx+Q+9$]z(Z=WIy;;Cp^r&hzUF,VH4oOR0)0vv !~rMyh,9}?crbYIf83`xe#U&' );

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
