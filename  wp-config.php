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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Alex' );

/** Database password */
define( 'DB_PASSWORD', 'Rodriguez.10' );

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
define( 'AUTH_KEY',         '-lm{]>#KY$^si RvJ^@1TRWj2h+4FSdD!D<sD|};S}R>:94AYk`,$.DeOo!F2?5*' );
define( 'SECURE_AUTH_KEY',  'TDF][2{LcIu.8l4kP~ncK^)=VPt0N,b!4GY3U/p[/Dz2lzrjoN9Axb<R!h)*gzP*' );
define( 'LOGGED_IN_KEY',    'KpRof]Mvb;#nL]ewrGav4&l3qgy$$JWVkNt`q<]5a>u+4I{FJ_qk6&a&uJU4m,@U' );
define( 'NONCE_KEY',        'KcYt8FZJLB#gDBZB`IWPOt6OstEpD<ikCmB,?N/9WV`%~vjp1}h<o0go3*pf)=Gs' );
define( 'AUTH_SALT',        'VbKQN(6p{?hjU*t9?Ie]{rCnIjpg;ikIs_kaToao(_.b})jB?*#0[spx*JC;p?@K' );
define( 'SECURE_AUTH_SALT', 'rM-KudAP<(qg&q|U<4%2dP^MG+d<^NQ@JM| W=w`}gE!r!nUo++][hVZb5`,U+G=' );
define( 'LOGGED_IN_SALT',   '.ONprH-?8+z>Bf#6hE8N){8 cT){pG{VnIyG{wy*97Zj}#La.Stl5N,.qo/P1W:U' );
define( 'NONCE_SALT',       '_M6yvuFP!r?oyX0KoCScAe56Wgg=D{sQLDj[tZ$&~6a9:!(upBj+f^Q<8R`//~aL' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
