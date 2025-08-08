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
define( 'AUTH_KEY',         'P[iodKOm5Z~]b.D&[!/J$7Zjp)=z?BASDCW>k;-O<K+=k1tVO<_~!SN_9<!^Vq0B' );
define( 'SECURE_AUTH_KEY',  'z1$P.?paS/79eI#jhA6+M:,*rG}1u{Gmtz!a_d6dR778e`L7WZD 4=1{T7k*V~Fn' );
define( 'LOGGED_IN_KEY',    'iOzU x5?MHP]oh,/B87)u^UOgz<F76<O`8$:*2W!3|Ds7;U5J3@)|1WF/db:v{)t' );
define( 'NONCE_KEY',        ')gRI1jDxz(?9,73k7aeA(Hn/l~,bg(%LUZdUDM/^>Mhs?PAuVZ{Qe44}kHyQ(m=k' );
define( 'AUTH_SALT',        '^<F)9s{SB6@gH5z<d<V9ov~]PH(zs/I_Bq3>A.Z7u{j=A8#AfH,<Hd&jJF;1OM5W' );
define( 'SECURE_AUTH_SALT', 'Q;9*.!CV}&,~., L)n~#W+$&1jd`yk0dkzl-O*uGCe6](3>gW[v<TU9T(2mo*&6(' );
define( 'LOGGED_IN_SALT',   'g}p|-gnC,FK&UCC@}8v={=1]q.+?%C2tqBJ$+Gsl>]w`+80o.43KDU`C^8S_f=?;' );
define( 'NONCE_SALT',       '#:+U<6v=)Pif7}_aCz^.pom7ynnPCq>$)#_md.u+[No}$hr4M15A.t(/I%o<x_ju' );

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
