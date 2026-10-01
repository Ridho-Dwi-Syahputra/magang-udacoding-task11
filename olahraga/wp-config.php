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
define( 'DB_NAME', 'wp_olahraga' );

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
define( 'AUTH_KEY',         '}md%^GaTv9 oYA/AF2FR5livAO=#v}zbdXRUi.VV*Q6*4>N%/!zfC} Hyh9Ta^h5' );
define( 'SECURE_AUTH_KEY',  'Jr3g{Kl4l@;Eyw33WdE:t,q^F??)ui+^P/*PAa(e^L ?<+.yyIx,>r:9.EsgbJL ' );
define( 'LOGGED_IN_KEY',    ')Hv>@=c l@:~ZPQ&2d7%pM$sDV&17^Cgvqb]_-2r.#9EHU8qnah|U==x Tg$YfT2' );
define( 'NONCE_KEY',        '7Xx4f|KN`^+*3IveXn}s?Wxi~AwbGpi =#:Vp4:tl_)gnhShEGBr7fsixG&[>(as' );
define( 'AUTH_SALT',        'r*i7CG|[cKzd+)AyJo2*_#t^$@X8B/9!PF*fpjL%4{~JcIJH(}STj i?fC42ZkxX' );
define( 'SECURE_AUTH_SALT', '%9WJVlEK|=#Ig&-c3o_1%$#h*bH8AfC`Z`}6^}1v<byKi}p8*#4QP&j/:M2&{/Yq' );
define( 'LOGGED_IN_SALT',   'iK)%t)In-~z:ZUeqK7r8iff-7nQOVK~]`;9CMlYECqr-z53<m`;ujP9W+o&q/=2_' );
define( 'NONCE_SALT',       'qg|iQ6/L@Z*UYRJ4DY`cpj~+<X4>1AjzQYYQ|G9q+xr7w/B6.G~8+NcH)NL7Z<l+' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '512M');
set_time_limit(300);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
